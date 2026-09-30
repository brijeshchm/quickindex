<?php

namespace App\Http\Controllers\Sales;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Client\Client; //model
use Validator; 
use DB;
use Mail; 
use Exception;
use App\Models\AssigneddArea;
use App\Models\AssignedZone; 
use App\Models\Comments; 
class BusinessController extends Controller
{
	protected $danger_msg = '';
	protected $success_msg = '';
	protected $warning_msg = '';
	protected $info_msg = '';
    protected $redirectTo = '/business-owners';
	
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
		    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('client.business-owners');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {         
		if($request->has('initial_form_submit')){
			$client = new Client;
			$messages = ['mobile.regex' => 'Mobile number cannot start with 0.'];
			$validator = Validator::make($request->all(), [
				'business_name' => 'required|regex:/[A-Za-z0-9 ]+/',
				'mobile' => 'required|unique:clients,mobile,NULL,id',
				'city' => 'required|max:50',
				'email' => 'required|email'
			],$messages);
			if ($validator->fails()) {
				return redirect("/business-owners")
							->withErrors($validator)
							->withInput();
			}else{
				// GENERATING SLUG
				// ***************
				$business_slug = NULL;
				$business_slug = trim(generate_slug($request->input('business_name')));
				if(is_null($business_slug)){
					return redirect("/business-owners")
								->withErrors($validator)
								->withInput();					
				}
				$slugExists = DB::table('clients')
					->select(DB::raw('business_slug'))
					->where('business_slug', 'like', '%'.$business_slug.'%')
					->orderBy('id','desc')
					->get();
				if(count($slugExists)>0){
					$business_slug = $slugExists[0]->business_slug;
					$business_slug = explode("-",$business_slug);
					$end = end($business_slug);
					reset($business_slug);
					if(!is_numeric($end)){
						$business_slug[] = 1;
					}else{
						++$end;
						$business_slug[count($business_slug)-1] = $end;
					}
					$business_slug = implode("-",$business_slug);
				}
			}
			
			$client->business_name = trim($request->input('business_name'));
			$client->business_slug = $business_slug;		 
			$pass = rand(000001,999999);
			$client->password = bcrypt($pass);
			$client->first_name = $request->input('first_name');
			$client->last_name = $request->input('last_name');
			$client->city = $request->input('city');
			$client->mobile = $request->input('mobile');
			$client->email = $request->input('email');
			$client->max_kw = 30;
			
			if($client->save()){
				$client = Client::find($client->id);
				$cityname = $request->input('city');
				$clientIDToAppend = $clientID = $client->id;
				if(strlen((string)$clientID)<4){
					$clientIDToAppend = str_pad($clientIDToAppend, 4, '0', STR_PAD_LEFT);
				}
				$client->username = $usr = strtoupper(substr($cityname,0,2)).$clientIDToAppend;
				$client->save(); 
				$client = Client::find($clientID);
			 
				$smsMessage = "Thanks for registering with QuickDials.
				%0D%0ALogin %26 Update your profile to get more leads to grow your business.
				%0D%0A%0D%0ABusiness Name:".$client->business_name."
				%0D%0AURL:www.quickdials.com
				%0D%0AUID:".$client->username."
				%0D%0APassword:".$pass."
				%0D%0A--
				%0D%0ARegards
				%0D%0AQuickDials Team";
			 
				sendSMS($client->mobile,$smsMessage);
				$this->success_msg .= 'Business registered successfully!';
				$request->session()->flash('success_msg', $this->success_msg);
		 
				return redirect("/business/dashboard");
			}else{
				$this->danger_msg .= 'Business not registered!';
				$request->session()->flash('danger_msg', $this->danger_msg);
				return redirect("/business-owners");
			}			
		}
		 
    }
     
    /**
     * Send client registration mail to client containing user name password.
     *
     * @param  object  $client
     */
    public function sendUandP($client,$usr,$pass)
    {
        Mail::send('emails.register', ['client'=>$client,'usr'=>$usr,'pass'=>$pass], function ($m) use ($client) {
            $m->from('otp@quickdials.com', 'quickdials');
            $m->to($client->email, $client->first_name." ".$client->last_name)->subject('QuickDials Login Credentials')->cc('clients@quickdials.com');
        });
    }

	/**
	 * Return Paginated Assigned Keywords
	 *
	 * @param $request - Request class instance
	 * @param $id - ClientID
	 * @return JSON object containing payload
	 */
	 public function getAssignedZonesPagination(Request $request)
	 {
		if ($request->ajax()) {
			$clientID = auth()->guard('clients')->user()->id;
			$leads = DB::table('assigned_zones');
			
			if ($request->input('search.value')!='') {

				$leads = $leads->where(function($query) use($request){
					$query->orWhere('citylists.city','LIKE','%'.$request->input('search.value').'%')
						  ->orWhere('zones.zone','LIKE','%'.$request->input('search.value').'%');						  
				});
			}
			$leads = $leads->join('zones','assigned_zones.zone_id','=','zones.id')
			->join('citylists','assigned_zones.city_id','=','citylists.id')			 
			->select('assigned_zones.*','citylists.city','zones.zone','assigned_zones.id as assign_id')
			->orderBy('assigned_zones.id','desc')
			->where('assigned_zones.client_id',$clientID)
			->paginate($request->input('length'));
					   
			$returnLeads = $data = [];
			$returnLeads['draw'] = $request->input('draw');
			$returnLeads['recordsTotal'] = $leads->total();
			$returnLeads['recordsFiltered'] = $leads->total();
	  
			foreach($leads as $lead){
			    
			    $action ='<a href="javascript:businessController.assignZoneDelete('.$lead->assign_id.')" title="Delete" class="btn btn-danger"><i class="bi bi-trash" aria-hidden="true"></i></a>';	
			
				if (!empty($lead->zone)) {
					$zonename= $lead->zone;
				} else {
					$zonename="";
					
				}
				$data[] = [
					"<th><input type='checkbox' class='check-box' value='$lead->assign_id'></th>",
					$lead->city,
					$zonename,
					$action,				 
				];
			}
			$returnLeads['data'] = $data;
			return response()->json($returnLeads);
			 
		}
	 }
	
	

	 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assignZoneDelete(Request $request, $id)
    { 
		$assignedZone = AssignedZone::findOrFail($id);
		if (!empty($assignedZone)) {
			AssigneddArea::where('assigned_zone_id',$assignedZone->zone_id)->where('client_id',$assignedZone->client_id)->where('state_id',$assignedZone->state_id)->where('city_id',$assignedZone->city_id)->delete();		 					 
			if ($assignedZone->delete()) {
				$status=1;							 
				$msg="Assigned Zone Successfully!";	
			}else{
				$status=0;							 
				$msg="Assigned Zone could not be Deleted!";	
			}
			return response()->json(['status'=>$status,'msg'=>$msg],200); 
    	}
	}
	
	
	 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function selectAssignZoneDelete(Request $request)
    {  
		$ids = $request->input('ids');		 
		if (!empty($ids)) {
			foreach($ids as $id){
			
				$assignedZone = AssignedZone::findOrFail($id);
				if (!empty($assignedZone)) {
					AssigneddArea::where('assigned_zone_id',$assignedZone->zone_id)->where('client_id',$assignedZone->client_id)->where('state_id',$assignedZone->state_id)->where('city_id',$assignedZone->city_id)->delete();
					$assignedZone->delete();
					$delete = 1;
				}
			}
		}
		if (!empty($delete)) {
			$status=1;
			$msg="Assigned Zone Successfully!";	
		} else {
			$status=0;
			$msg="Assigned Zone could not be Deleted!";	
		}  		
	 
		return response()->json(['status'=>$status,'msg'=>$msg],200); 
	}
	

	public function getAjaxCities(Request $request)
    {         
		$sid = $request->input('sid');
		$cid = $request->input('cid');
		$citys= DB::table('citylists')->where('state_id',$sid)->get();
 
		if ($citys) { 
			echo '<option value="">Select City</option>';
			foreach ($citys as $city) { 
			$selected = ($cid==$city->id)?"selected":'';

			echo'<option value="'.$city->id.'" '.$selected.' >'.$city->city.'</option>';

			}
		} else { 
			echo'<option value="">No record found</option>';
		}
    }

	public function getAjaxZone(Request $request)
    {
	
		$cid = $request->input('city');
		$zid = $request->input('zone'); 
		$zones= DB::table('zones')->where('city_id',$cid)->orderBy('zone','asc')->get();
 
		if($zones){ 
		echo '<option value="">Select zone</option>';
		foreach($zones as $zone){ 
		$selected = ($zid==$zone->id)?"selected":'';

		echo'<option value="'.$zone->id.'" '.$selected.' >'.$zone->zone.' '.$zone->pincode.'</option>';

		}
		echo '<option value="Other">Other</option>';
		} else { 
		echo'<option value="">No record found</option>';
		}
		
	
    }
	

	public function getAjaxSate(Request $request)
    { 
		$sid = $request->input('state');		 
		$cid = $request->input('city');
		$cityes= DB::table('citylists')->where('state_id',$sid)->get();
		if($cityes){ 
		echo '<option value="">Select City</option>';
		foreach($cityes as $city){ 
		$selected = ($cid ==$city->id)?"selected":'';
		echo'<option value="'.$city->id.'" '.$selected.' >'.$city->city.'</option>';
		}		 
		} else { 
		echo'<option value="">No record found</option>';
		}
		
	
    }
	
    
    
    
	public function help(Request $request)
    { 
        	$clientID = auth()->guard('clients')->user()->id;
        	$client = Client::find($clientID);
         
      
        return view('business.help',['client'=>$client]);
    }
	 
    	
	public function package(Request $request)
    { 
        	$clientID = auth()->guard('clients')->user()->id;
        	$client = Client::find($clientID);
        $search = [];
		if($request->has('search')){
			$search = $request->input('search');
		}
        return view('business.package',['search'=>$search,'client'=>$client]);
    }
    
		 
	 
    
    public function buyPackage(Request $request)
    { 
        	$clientID = auth()->guard('clients')->user()->id;
        	$client = Client::find($clientID);
        $search = [];
		if($request->has('search')){
			$search = $request->input('search');
		}
        return view('business.buyPackage',['search'=>$search,'client'=>$client]);
    }
        
 	
    /**
     * Return paginated resources.
     *
     * @return JSON Payload.
     */
    public function getDiscussion(Request $request){
		if($request->ajax()){
			 
			$clientID = auth()->guard('clients')->user()->id;
			$discussion = DB::table('client_discussion')			 
					   ->orderBy('id','desc')					  
					   ->where('client_id',$clientID)
					   ->paginate($request->input('length'));
					   
			$returnLeads = [];
			$data = [];
			$returnLeads['draw'] = $request->input('draw');
			$returnLeads['recordsTotal'] = $discussion->total();
			$returnLeads['recordsFiltered'] = $discussion->total();
			 
			foreach($discussion as $lead){
				$data[] = [								 
					date_format(date_create($lead->createdate),'d-m-Y H:i:s'),
					$lead->discussion,	
				];
			}
			$returnLeads['data'] = $data;
			return response()->json($returnLeads);
			//return $leads->links();
		}
    }

   
	
	/**
     * Handling client remark
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function discussion(Request $request)
    {    
			 
			if($request->input('discussion_form_submit') == 'Submit'){
	
			$admin_id = $request->input('admin-id');
			$client_id = $request->input('client-id');
			$discussion = $request->input('clientremark');
			$add_data = array(
			'client_id'=>$client_id,
			'admin_id'=>$admin_id,
			'name'=>auth()->guard('clients')->user()->business_name,
			'discussion'=>$discussion,
			); 
			$add  = DB::table('client_discussion')->insert($add_data);
		if($add){
			
			$resulsu = "Discussion Information Successfully";
			return response()->json(['status'=>1,'result'=>$resulsu]);
			}else{
				 
				return response()->json(['status'=>0,'result'=>'discussion Information not assigned']);
			}	
			 
			}
			 
	}
	
	 /**
     * Remove the specified resource from storage status.
     * Author: Brijesh Chauhan.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function businessActiveStatus(request $request, $id,$val)
    {
       	 if($request->ajax()){	
		 
		$client = Client::findOrFail($id);	 
		$client->status=$val;
	
		if($client->save()){
			$status=1;							 
			$msg="Placement status updated successfully!";					
			}else{
			$status=0;							 
			$msg="Placement status could not be updated!";	
			}		
			return response()->json(['status'=>$status,'msg'=>$msg],200); 
		 }
    }
		
	/*
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function saveBusinessOverview(Request $request)
	{

		if ($request->ajax()) {
			try {
				$id = $request->client_id;
				if (!is_null($id)) {

					$client = Client::withTrashed()->where('id', $id)->first();
					$validator = Validator::make($request->all(), [

						'business_description' => 'nullable|string|max:2000',

					]);


					if ($validator->fails()) {
						$errorsBag = $validator->getMessageBag()->toArray();
						return response()->json(['status' => 1, 'errors' => $errorsBag], 400);
					}



					$client->business_description = $request->input('business_description');
					$client->business_overview = $request->input('business_overview');


					if ($client->save()) {
						$status = true;
						$msg = 'Busineess overview Updated Successfully';
						$code = 200;
					} else {
						$status = false;
						$msg = 'Busineess overview Not Updated';
						$code = 400;
					}

				}
			} catch (Exception $e) {
				$status = false;
				$msg = $e->getMessage();
				$code = 400;
			}
			return response()->json(['status' => $status, 'msg' => $msg], $code);
		}
	}

   
	public function saveBusinessFaqs(Request $request)
	{

		if ($request->ajax()) {
			try {
				$id = $request->client_id;
				if (!is_null($id)) {

					$client = Client::withTrashed()->where('id', $id)->first();
					$validator = Validator::make($request->all(), [

						'faqq1' => 'nullable|string|max:2000',

					]);


					if ($validator->fails()) {
						$errorsBag = $validator->getMessageBag()->toArray();
						return response()->json(['status' => 1, 'errors' => $errorsBag], 400);
					}



					$client->faqq1 = $request->input('faqq1');
					$client->faqa1 = $request->input('faqa1');
					$client->faqq2 = $request->input('faqq2');
					$client->faqa2 = $request->input('faqa2');
					$client->faqq3 = $request->input('faqq3');
					$client->faqa3 = $request->input('faqa3');
					$client->faqq4 = $request->input('faqq4');
					$client->faqa4 = $request->input('faqa4');
					$client->faqq5 = $request->input('faqq5');
					$client->faqa5 = $request->input('faqa5');
					$client->faqq6 = $request->input('faqq6');
					$client->faqa6 = $request->input('faqa6');

					$client->faqq7 = $request->input('faqq7');
					$client->faqa7 = $request->input('faqa7');

					$client->faqq8 = $request->input('faqq8');
					$client->faqa8 = $request->input('faqa8');

					$client->faqq9 = $request->input('faqq9');
					$client->faqa9 = $request->input('faqa9');

					$client->faqq10 = $request->input('faqq10');
					$client->faqa10 = $request->input('faqa10');

					if ($client->save()) {
						$status = true;
						$msg = 'Busineess FAQ Updated Successfully';
						$code = 200;
					} else {
						$status = false;
						$msg = 'Busineess FAQ Not Updated';
						$code = 400;
					}

				}
			} catch (Exception $e) {
				$status = false;
				$msg = $e->getMessage();
				$code = 400;
			}
			return response()->json(['status' => $status, 'msg' => $msg], $code);
		}
	}

	
	/*
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function saveBusinessMeta(Request $request)
	{

		if ($request->ajax()) {
			try {
				$id = $request->client_id;

				if (!is_null($id)) {

					$client = Client::withTrashed()->where('id', $id)->first();
					$validator = Validator::make($request->all(), [

						'meta_title' => 'nullable|string|max:75',
						'h1_heading' => 'nullable|string|max:275',					 
						'meta_description' => 'nullable|string|max:170',

					]);


					if ($validator->fails()) {
						$errorsBag = $validator->getMessageBag()->toArray();
						return response()->json(['status' => 1, 'errors' => $errorsBag], 400);
					}



					$client->meta_title = $request->input('meta_title');

					$client->meta_description = $request->meta_description;
					$client->business_intro = $request->business_intro;
					$client->h1_heading = $request->h1_heading;


					if ($client->save()) {
						$status = true;
						$msg = 'Busineess Meta Updated Successfully';
						$code = 200;
					} else {
						$status = false;
						$msg = 'Busineess Meta Not Updated';
						$code = 400;
					}

				}
			} catch (Exception $e) {
				$status = false;
				$msg = $e->getMessage();
				$code = 400;
			}
			return response()->json(['status' => $status, 'msg' => $msg], $code);
		}
	}



	
}
