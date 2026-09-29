<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\State;
use App\Models\Citieslists;
use App\Models\Modesdetails;
use App\Models\Banksdetails;
use App\Models\ClientCategory;
use App\Models\ParentCategory;
use App\Models\Occupation;
use App\Models\KeywordSellCount;
use App\Models\PaymentHistory;
use App\Models\Client\AssignedKWDS;
use App\Models\Discussions;
use App\Models\AssignedZone;
use App\Models\Keyword;
use App\Models\AssignedClientCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use DB;
use Auth;
use Validator;
class VendorController extends Controller
{
    public function index(Request $request): View
    {

		$sales = Auth::guard('sales')->user();
 
    $vendors = Client::query()
            ->search($request->string('search')->toString())
            ->when($request->filled('status'), fn ($query) => $query->where('status', $request->string('status')->toString()))
            ->when($request->filled('city'), fn ($query) => $query->where('city', $request->string('city')->toString()))    
            ->where('created_by',$sales->id)        
            ->latest()
            ->paginate(15)
            ->withQueryString();

// dd($vendors->getCollection());
        return view('sales.vendors.index', [
            'vendors' => $vendors,
            'cities' => '',
            'categories' => '',
            'executives' =>'',
        ]);


        
    }

    public function create(): View
    {

        $sales = Auth::guard('sales')->user();
        $citylist = Citieslists::all();
        $statesis = State::get();     


        return view('sales.vendors.create', [
            'vendor' => new Client(['status' => 'pending']),
            'tabVendors' => Client::query()->latest()->limit(12)->where('created_by',$sales->id)->get(['id', 'business_name', 'active_status']),
            'isCreating' => true,
            'citylist' => $citylist,
            'statesis' => $statesis,             
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $vendor = Client::create($this->validatedData($request));

        return redirect()
            ->route('sales.vendors.edit', $vendor)
            ->with('success', 'Vendor created and added to pending review.');
    }

    public function edit(Request $request,  Client $vendor): View
    {

   
         $sales = Auth::guard('sales')->user();


    $citylist = Citieslists::all();
    $clientCategories = ClientCategory::all();
    $parentCategory = ParentCategory::all();
    $discussions = Discussions::where('client_id',$sales->id)->get();

	$kwds = DB::table('assigned_kwds')
				->join('citylists', 'assigned_kwds.city_id', '=', 'citylists.id')
				->join('parent_category', 'assigned_kwds.parent_cat_id', '=', 'parent_category.id')
				->join('child_category', 'assigned_kwds.child_cat_id', '=', 'child_category.id')
				->join('keyword', 'assigned_kwds.kw_id', '=', 'keyword.id')
				->select('assigned_kwds.*', 'citylists.city', 'parent_category.parent_category', 'child_category.child_category', 'keyword.keyword','keyword.slug')
				->where('assigned_kwds.client_id', $vendor->id)
				->get();


			$distinctCities = DB::table('keyword')
				->join('citylists', 'keyword.city_id', '=', 'citylists.id')
				->select('citylists.*', 'keyword.city_id')
				->distinct()
				->get();
	$statesis = State::get();

    	$assignedClientCategories = AssignedClientCategory::select('client_category_id')->where('client_id', $vendor->id)->get();
			$accs = [];
			foreach ($assignedClientCategories as $acc) {
				$accs[] = $acc->client_category_id;
			}
			$assignedClientCategories = $accs;


			
			$moderesults = Modesdetails::get();
			$banksdetails = Banksdetails::all();
           
	
			 
	 

    $query = DB::table('assigned_zones')
        ->join('zones', 'assigned_zones.zone_id', '=', 'zones.id')
        ->join('citylists', 'assigned_zones.city_id', '=', 'citylists.id')
        ->where('assigned_zones.client_id', $vendor->id);

 
    $recordsTotal = (clone $query)->count();

    $search = trim((string) $request->input('search.value', ''));

    if ($search !== '') {
        $query->where(function ($q) use ($search) {
            $q->where('citylists.city', 'LIKE', "%{$search}%")
              ->orWhere('zones.zone', 'LIKE', "%{$search}%");
        });
    }

 
    $recordsFiltered = (clone $query)->count();

    $start  = max(0, (int) $request->input('start', 0));
    $length = (int) $request->input('length', 10);
    $length = $length === -1
        ? min($recordsFiltered, 500)
        : min(max($length, 1), 100);

    $zones = $query
        ->select(
            'assigned_zones.id as assign_id',
            'citylists.city',
            'zones.zone'
        )
        ->orderByDesc('assigned_zones.id')
       ->paginate(10)->withQueryString();

 
			 

		// dd($zones->get());





	$occupations = Occupation::where('status', '1')->get();
	$keywordlists = Keyword::whereNotExists(function ($query) use ($vendor) {
				$query->select(DB::raw(1))
					->from('assigned_kwds')
					->whereColumn('assigned_kwds.kw_id', 'keyword.id')
					->where('assigned_kwds.client_id', $vendor->id);
			})->get();

           
        return view('sales.vendors.edit', ['vendor' => $vendor,'discussions'=>$discussions, 'kwds' => $kwds, 'request' => $request, 'distinctCities' => $distinctCities, 'clientCategories' => $clientCategories, 'assignedClientCategories' => $assignedClientCategories, 'citylist' => $citylist, 'parentCategory' => $parentCategory, 'moderesults' => $moderesults, 'statesis' => $statesis, 'occupations' => $occupations, 'keywordlist' => $keywordlists, 'isCreating' => true,'locations'=>$zones]);
    }

    public function update(Request $request, Client $vendor): RedirectResponse
    {
        $vendor->update($this->validatedData($request));

        return back()->with('success', 'Vendor profile updated successfully.');
    }

    public function destroy(Client $vendor): RedirectResponse
    {
        $vendor->delete();

        return redirect()->route('sales.vendors.index')->with('success', 'Vendor deleted.');
    }


    public function assignLocationsList(Request $request,$id)
    {
  
 
  
   $perPage = min(max((int) $request->input('per_page', 10), 1), 50);

    $locations = DB::table('assigned_zones')
        ->join('zones', 'assigned_zones.zone_id', '=', 'zones.id')
        ->join('citylists', 'assigned_zones.city_id', '=', 'citylists.id')
        ->where('assigned_zones.client_id', $id)
        ->select(
            'assigned_zones.id as assign_id',
            'citylists.city',
            'zones.zone'
        )
        ->orderByDesc('assigned_zones.id')
        ->paginate($perPage);
 
    return response()->json($locations);


 

    }


        public function bulkDeleteAssignedZones(Request $request, string $id)
        {
            $validated = $request->validate([
                'ids'   => ['required', 'array', 'min:1'],
                'ids.*' => ['required', 'integer', 'distinct'],
            ]);

           

            $deleted = DB::table('assigned_zones')
                ->where('client_id', $id)
                ->whereIn('id', $validated['ids'])
                ->delete();

            return response()->json([
                'success' => true,
                'deleted' => $deleted,
            ]);
        }


    public function toggleStatus(Client $vendor): RedirectResponse
    {

    
        $vendor->update([
            'status' => $vendor->status === 'active' ? 'inactive' : 'active',
        ]);

        return back()->with('success', 'Vendor status updated.');
    }

    public function export(Request $request): Response
    {
        $vendors = Client::query()
            ->search($request->string('search')->toString())
            ->latest()
            ->get(['id', 'business_name', 'first_name', 'email', 'mobile', 'city','created_at']);

        $rows = collect([[
            'Vendor ID',
            'Business Name',           
            'Email',
            'Mobile',
            'City',            
            'Created Date',
        ]])
            ->merge($vendors->map(fn (Client $vendor): array => [
                $vendor->id,
                $vendor->business_name,                
                $vendor->email,
                $vendor->mobile,
                $vendor->city,
               
               
                $vendor->created_at?->toDateString(),
            ]));

        $csv = $rows->map(fn (array $row): string => collect($row)
            ->map(fn ($value): string => '"' . str_replace('"', '""', (string) $value) . '"')
            ->implode(','))
            ->implode("\n");

        return response($csv, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="vendors.csv"',
        ]);
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'business_name' => ['required', 'string', 'max:160'],
         
            'email' => ['required', 'email', 'max:160'],
            'mobile' => ['required', 'string', 'max:30'],
            'alternate_mobile' => ['nullable', 'string', 'max:30'],
            'business_email' => ['nullable', 'email', 'max:160'],
            'whatsapp' => ['nullable', 'string', 'max:30'],
            'business_slug' => ['nullable', 'string', 'max:180'],
            'category' => ['required', 'string', 'max:100'],
            'country' => ['nullable', 'string', 'max:80'],
            'state' => ['nullable', 'string', 'max:80'],
            'city' => ['required', 'string', 'max:80'],
            'zone' => ['nullable', 'string', 'max:80'],
            'area' => ['nullable', 'string', 'max:80'],
            'pincode' => ['nullable', 'string', 'max:15'],
            'address' => ['nullable', 'string', 'max:500'],
            'landmark' => ['nullable', 'string', 'max:160'],
            'website' => ['nullable', 'url', 'max:200'],
            'google_map_url' => ['nullable', 'url', 'max:300'],
            'business_hours' => ['nullable', 'string', 'max:500'],
            'meta_title' => ['nullable', 'string', 'max:180'],
            'meta_description' => ['nullable', 'string', 'max:320'],
            'meta_keywords' => ['nullable', 'string', 'max:500'],
            'seo_url' => ['nullable', 'string', 'max:200'],
            'canonical_url' => ['nullable', 'url', 'max:300'],
            'short_description' => ['nullable', 'string', 'max:500'],
            'full_description' => ['nullable', 'string'],
            'services' => ['nullable', 'string'],
            'facilities' => ['nullable', 'string'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'status' => ['required', 'in:active,pending,inactive,suspended'],
            'sales_executive' => ['nullable', 'string', 'max:120'],
            'assigned_keywords' => ['nullable', 'array'],
            'assigned_keywords.*' => ['string', 'max:80'],
        ]);
    }






    public function updateAccountSettings(Request $request, $id)
	{

		//  dd($request->all());
         $id = $request->client_id;
		if (!is_null($id)) {

			$clients = Client::withTrashed()->where('id', $id)->get();
			if (!empty($clients)) {
				foreach ($clients as $c) {
					$client = $c;
					break;
				}
			}

			// SAVE CLIENT ACTIVE STATUS
			// *************************
			if ($request->has('submit_active_status')) {
				$client = Client::withTrashed()->where('id', $id)->first();
				$client->active_status = $request->input('active_status');
				if ($client->save()) {
					return response()->json(['status' => 1, 'msg' => 'Client status updated successfully !!']);
				} else {
					return response()->json(['status' => 0, 'msg' => 'Client not updated !!']);
				}
			}


			// SAVE CLIENT PAID STATUS
			// ***********************
			if ($request->has('submit_paid_status')) {
				$client = Client::withTrashed()->where('id', $id)->first();
				$client->paid_status = $request->input('paid_status');
				if ($client->save()) {
					return response()->json(['status' => 1, 'msg' => 'Client paid status updated successfully !!']);
				} else {
					return response()->json(['status' => 0, 'msg' => 'Client not updated !!']);
				}
			}


			// SAVE CLIENT Certified STATUS
			// ***********************
			if ($request->has('submit_certified_status')) {
				$client = Client::withTrashed()->where('id', $id)->first();

				$client->certified_status = $request->input('certified_status');
				if ($client->save()) {
					return response()->json(['status' => 1, 'msg' => 'Client Certified status updated successfully !!']);
				} else {
					return response()->json(['status' => 0, 'msg' => 'Client not updated !!']);
				}
			}
			if ($request->has('submit_trusted_status')) {
				$client = Client::withTrashed()->where('id', $id)->first();

				$client->trusted_status = $request->input('trusted_status');
				if ($client->save()) {
					return response()->json(['status' => 1, 'msg' => 'Client trusted status updated successfully !!']);
				} else {
					return response()->json(['status' => 0, 'msg' => 'Client not updated !!']);
				}
			}
			if ($request->has('submit_gst_status')) {
				$client = Client::withTrashed()->where('id', $id)->first();

				$client->gst_status = $request->input('gst_status');
				if ($client->save()) {
					return response()->json(['status' => 1, 'msg' => 'Client GST updated successfully !!']);
				} else {
					return response()->json(['status' => 0, 'msg' => 'Client not updated !!']);
				}
			}

			// SAVE CLIENT TYPE
			// ****************
			if ($request->has('submit_client_assign')) {

			$client = Client::withTrashed()->where('id', $request->input('client_id'))->first();
			$client->assign_to = $request->input('assign_to');
			if ($client->save()) {
				return response()->json(['status' => 1, 'msg' => 'Created by client updated successfully !!']);
			} else {
				return response()->json(['status' => 0, 'msg' => 'Client not updated !!']);
			}
		}


        if ($request->has('client_cat_service')) {

			$client = Client::withTrashed()->where('id', $request->input('client_id'))->first();
			$client->category_service = $request->input('category_service');
			if ($client->save()) {
				return response()->json(['status' => 1, 'msg' => 'Category Service updated successfully !!']);
			} else {
				return response()->json(['status' => 0, 'msg' => 'Client not updated !!']);
			}
		}


			// SAVE CLIENT TYPE
			// ****************
			if ($request->has('submit_client_type')) {

				if (!($request->user()->current_user_can('administrator') || $request->user()->current_user_can('package_name'))) {
					return repsonse()->json(['status' => 0, 'msg' => 'You don`t have permission'], 200);
				}
				$client = Client::withTrashed()->where('id', $id)->first();
				$client->client_type = $request->input('client_type');
				if ($client->save()) {
					return response()->json(['status' => 1, 'msg' => 'Client type updated successfully']);
				} else {
					return response()->json(['status' => 0, 'msg' => 'Client not updated successfully']);
				}
			}
 
			// SAVE YEARLY SUBS DATE
			// *********************
			if ($request->has('submit_yrly_subs_starting_date')) {
				$client = Client::withTrashed()->where('id', $id)->first();
				if (!$request->user()->current_user_can('administrator')) {
					return response()->json(['status' => 0, 'msg' => 'Unauthorised to update subscription date.'], 200);
				}

				$client->expired_from = $request->input('expired_from');
				$client->expired_on = $request->input('expired_on');
				if ($client->save()) {
					return response()->json(['status' => 1, 'msg' => 'Date updated successfully']);
				} else {
					return response()->json(['status' => 0, 'msg' => 'Date update failed']);
				}
			}

			// SAVE MAX KWDS
			// *************
			if ($request->has('submit_max_kw')) {
				$client = Client::withTrashed()->where('id', $id)->first();
				if (!($request->user()->current_user_can('administrator') || $request->user()->current_user_can('manager'))) {
					return response()->json(['status' => 0, 'msg' => 'Unauthorised to update max. kw field']);
				}
				$client->max_kw = $request->input('max_kw');
				if ($client->save()) {
					return response()->json(['status' => 1, 'msg' => 'Maximum Keywords field updated successfully']);
				} else {
					return response()->json(['status' => 0, 'msg' => 'Maximum Keywords field not updated successfully']);
				}
			}
			if ($request->has('submit_free_amt')) {

		 
				$clientdeatails = Client::withTrashed()->where('id', $id)->first();
				if (!($request->user()->current_user_can('administrator') || $request->user()->current_user_can('manager'))) {
					return response()->json(['status' => 0, 'msg' => 'Unauthorised to update max. kw field']);
				}
			

			 if ($clientdeatails->coins_free == '0') {
				$paymenthistory = new PaymentHistory;
				$paymenthistory->client_id = $clientdeatails->id;
				$paymenthistory->customer_name = $clientdeatails->business_name;
				$paymenthistory->business_name = $clientdeatails->business_name;
				$paymenthistory->mobile = $clientdeatails->mobile;
				$paymenthistory->email = $clientdeatails->email;
				$paymenthistory->package_name = $clientdeatails->client_type;
				$paymenthistory->coins_amt = '555';
				$paymenthistory->selectproofid = "";
				$paymenthistory->proofid = "";
				$paymenthistory->paid_amount = '0';
				$paymenthistory->tds_status = "No";
				$paymenthistory->tds_amount = "0";
				$paymenthistory->gst_tax = '0';
				$paymenthistory->gst_total_amount = '0';
				$paymenthistory->gst_status = "Yes";
				$paymenthistory->total_amount = '0';
				$paymenthistory->transactionid = 'FREE-'.time();;
				$paymenthistory->order_number = 'FREE-'.time();
				$paymenthistory->paymentcollect = 0;
				$paymenthistory->payment_mode = "free subscribe";
				$paymenthistory->payment_bank = "";
				$paymenthistory->invoice_status = '1';
				$paymenthistory->save();


				$clientdeatails->coins_amt = $clientdeatails->coins_amt + 555;
				if ($clientdeatails->expired_on == '0000-00-00 00:00:00' || $clientdeatails->expired_on == 'NULL') {

					$newDate = date('Y-m-d', strtotime(now() . ' +365 days'));

				} else if (strtotime($clientdeatails->expired_on) > strtotime(date('Y-m-d'))) {
					$newDate = date('Y-m-d', strtotime($clientdeatails->expired_on . ' +365 days'));

				} else if (strtotime($clientdeatails->expired_on) < strtotime(date('Y-m-d'))) {
					$newDate = date('Y-m-d', strtotime(now() . ' +365 days'));

				} else {
					$newDate = date('Y-m-d', strtotime(now() . ' +365 days'));
				}
				$clientdeatails->expired_on = $newDate;
				$clientdeatails->active_status = "1";
				$clientdeatails->paid_status = "1";
				$clientdeatails->coins_free = "1";
							  
				if ($clientdeatails->save()) {
					return response()->json(['status' => 1, 'msg' => 'Free subscribed successfully']);
				} else {
					return response()->json(['status' => 0, 'msg' => 'Not subscribed successfully']);
				}
			}
			}


			 
		 

 
 
 
 

			 
		}

	}

 

 

    public function getPaginatedLeads(Request $request, int $id)
    {
    
        $vendor = Client::findOrFail($id);

        $perPage = min(max((int) $request->input('per_page', 10), 1), 50);
        $search = trim((string) $request->input('search', ''));

        $query = DB::table('assigned_leads')
            ->join('leads', 'leads.id', '=', 'assigned_leads.lead_id')
            ->where('assigned_leads.client_id', $vendor->id);

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('leads.name', 'like', "%{$search}%")
                    ->orWhere('leads.mobile', 'like', "%{$search}%")
                    ->orWhere('leads.email', 'like', "%{$search}%")
                    ->orWhere('leads.kw_text', 'like', "%{$search}%")
                    ->orWhere('leads.city_name', 'like', "%{$search}%");
            });
        }

        $leads = $query
            ->select(
                'assigned_leads.id as assignment_id',
                'leads.id as lead_id',
                'leads.name',
                'leads.mobile',
                'leads.email',
                'leads.kw_text as course',
                'leads.city_name as city',
                'assigned_leads.created_at as assigned_at'
            )
            ->orderByDesc('assigned_leads.created_at')
            ->orderByDesc('assigned_leads.id')
            ->paginate($perPage);

        $leads->getCollection()->transform(function ($lead) {
            $lead->date = $lead->assigned_at
                ? \Carbon\Carbon::parse($lead->assigned_at)->format('d-m-Y H:i')
                : '';

            return $lead;
        });

        return response()->json($leads);
    }



    	/**
	 * Handling client remark
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function remarkDiscussion(Request $request, $id = null)
	{

 
		if (null == $id) {
			return response() - json(['msg' => 'Client Not Found'], 400);
		}

		$admin_id = $request->user()->id;

		if ($request->input('submitClientDiscussion')) {
			$client = Client::where('id', $id)->first();
			$discussion = $request->input('remark');
			$add_data = array(
				'client_id' => $client->id,
				'admin_id' => $admin_id,
				'name' => $request->user()->first_name,
				'discussion' => $discussion,
			);
 
			$add = DB::table('client_discussion')->insert($add_data);
			 
            if ($add) {
                return response()->json(['status' => 1, 'msg' => 'Client Followup successfully']);
            } else {
                return response()->json(['status' => 0, 'msg' => 'Client Followup successfully']);
            }
            }
		 
	}


    
    public function getDescussion(Request $request, int $id)
    {
        $vendor = Client::findOrFail($id);

    
        $perPage = min(max((int) $request->input('per_page', 10), 1), 50);
        $search = trim((string) $request->input('search', ''));

        $query = DB::table('client_discussion')
            ->where('client_id', $vendor->id);

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                ->orWhere('discussion', 'like', "%{$search}%");
            });
        }

        return response()->json(
            $query->orderByDesc('id')->paginate($perPage)
        );
    }




	/**
	 * Delete transaction amuunt client .
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function status(Request $request,$id)
	{
        dd($request->all());
		try {

			$paymentHistory = PaymentHistory::findorFail($id);
			$client = Client::findorFail($paymentHistory->client_id);
			$leads_count_diff = $paymentHistory->leads_count + $client->leads_count;
			$client->leads_count = $paymentHistory->leads_count;
			$client->leads_remaining = $client->leads_remaining + $paymentHistory->leads_count;
			;
			$client->cost_per_lead = $paymentHistory->cost_per_lead;
			$client->client_type = $paymentHistory->package_name;
			$client->expired_from = $paymentHistory->expired_from;
			$client->expired_on = $paymentHistory->expired_on;
			$client->balance_amt = $paymentHistory->total_amount;
			$client->coins_amt = $client->coins_amt + $paymentHistory->coins_amt;
			$client->paid_status = 1;
			$client->certified_status = 1;
			$client->active_status = 1;

			if ($client->save()) {
				$paymentHistory->invoice_status = '1';
				$paymentHistory->save();
				return response()->json([
					"statusCode" => 1,
					"data" => [
						"responseCode" => 200,
						"payload" => "",
						"message" => "Invoice Status Approved successfully !!"
					]
				], 200);
			} else {
				return response()->json([
					"statusCode" => 0,
					"data" => [
						"responseCode" => 400,
						"payload" => "",
						"message" => "Invoice Status  not successfully !!"
					]
				], 200);
			}
		} catch (\Exception $e) {
			return response()->json([
				"statusCode" => 0,
				"data" => [
					"responseCode" => 404,
					"payload" => "",
					"message" => "Invoice Status not found !!"
				]
			], 200);
		}
	}
	/**
	 * Delete transaction amuunt client .
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	
	/**
	 * Handling client remark
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function paymentAdd(Request $request,$id)
	{


		if ($request->ajax()) {

			$id = $request->input('client_id');
			if (null == $id) {
				return response()->json(['msg' => 'Client Not Found'], 400);
			}
			$validator = Validator::make($request->all(), [

				'business_name' => 'required',
				'package_name' => 'required',
				'selectproofid' => 'required',
				'paid_amount' => 'required',
				'gst_status' => 'required',
				'gst_total_amount' => 'required',
				'tds_status' => 'required',
				'total_amount' => 'required',
				// 'paid_amt_in_words'=>'required',
				'stud-payment_mode' => 'required',
				//'pay_mode_details'=>'required',
				//	'expired_from'=>'required',
				//	'expired_on'=>'required',
				'coins_amt' => 'required',
				// 'leads_count'=>'required',

			]);
			if ($validator->fails()) {
				$errorsBag = $validator->getMessageBag()->toArray();
				return response()->json(['status' => 1, 'errors' => $errorsBag], 400);
			}




			if ($request->input('pay-submit') == 'savepay' && !empty($request->input('paid_amount'))) {

				$client = Client::withTrashed()->where('id', $id)->first();
 
				$paymenthistory = new PaymentHistory;
				$paymenthistory->client_id = $client->id;
				$paymenthistory->customer_name = $client->first_name . ' ' . $client->last_name;
				$paymenthistory->business_name = trim($request->input('business_name'));
				$paymenthistory->mobile = $client->mobile;
				$paymenthistory->email = $client->email;
				$paymenthistory->package_name = $request->input('package_name');
				// $paymenthistory->leads_count = $request->input('leads_count');
				// $paymenthistory->cost_per_lead = $request->input('coins_lead');
				$paymenthistory->coins_amt = $request->input('coins_amt');
				//	$paymenthistory->expired_from = $request->input('expired_from');
				//	$paymenthistory->expired_on = $request->input('expired_on');
				$paymenthistory->selectproofid = $request->input('selectproofid');
				$paymenthistory->proofid = $request->input('proofid');
				$paid_amount = $request->input('paid_amount');
				$paymenthistory->paid_amount = $paid_amount;
				$tds_status = $request->input('tds_status');
				$paymenthistory->tds_status = $request->input('tds_status');
				$gst_tax = $request->input('gst_tax');
				$paymenthistory->gst_tax = $gst_tax;
				$gst_total_amount = $request->input('gst_total_amount');
				$paymenthistory->gst_total_amount = $gst_total_amount;
				$gst_status = $request->input('gst_status');
				$paymenthistory->gst_status = $request->input('gst_status');
				$tds_amount = $request->input('tds_amount');
				$paymenthistory->tds_amount = $tds_amount;
				$total_amount = $request->input('total_amount');
				$paymenthistory->total_amount = $total_amount;
				// $paid_amt_in_words=$request->input('paid_amt_in_words');
				// $paymenthistory->paid_amt_in_words = $paid_amt_in_words;
				//$pay_mode_details=$request->input('pay_mode_details');
				//$paymenthistory->pay_mode_details = $pay_mode_details;
				$transactionid = $request->input('transactionid');
				$paymenthistory->transactionid = $transactionid;
				$paymenthistory->paymentcollect = $request->user()->id;

				// payment mode
				if (!empty($request->input('stud-payment_mode'))) {
					$stud_payment_mode = $request->input('stud-payment_mode');
					if ("cash" == $request->input('stud-payment_mode')) {
						$stud_payment_bank = "cash";
					} else if ("bank" == $stud_payment_mode) {
						if (!empty($request->input('stud-bank'))) {
							$stud_payment_bank = $request->input('stud-bank');
							$stud_card_no = $request->input('stud-card_no');
							$paymenthistory->bank_card_no = $stud_card_no;

						}


					} else if ("cheque" == $stud_payment_mode) {
						if (!empty($request->input('stud-chq_no'))) {
							$stud_card_chq_no = $request->input('stud-chq_no');
							$paymenthistory->chq_card_no = $stud_card_chq_no;

						}
						$stud_payment_bank = "cheque";
					} else if ("paytm" == $stud_payment_mode) {
						if (!empty($request->input('stud-paytm'))) {
							$stud_paytm = $request->input('stud-paytm');
							$paymenthistory->pay_paytm = $stud_paytm;
							$stud_payment_bank = "paytm";
						}

					} else if ("neft" == $stud_payment_mode) {
						if (!empty($request->input('stud-neft'))) {
							$stud_neft = $request->input('stud-neft');
							$paymenthistory->pay_neft = $stud_neft;
							$stud_payment_bank = "neft";
						}

					} else if ("googlepay" == $stud_payment_mode) {
						if (!empty($request->input('stud-googlepay'))) {
							$pay_googlepay = $request->input('stud-googlepay');
							$paymenthistory->pay_googlePay = $pay_googlepay;
							$stud_payment_bank = "googlepay";
						}

					} else {
						if (!empty($request->input('stud-' . $stud_payment_mode))) {
							$stud_payment_bank = $request->input('stud-' . $stud_payment_mode);
						}

					}

				}
				$paymenthistory->payment_mode = $stud_payment_mode;
				$paymenthistory->payment_bank = $stud_payment_bank;

				if ($paymenthistory->save()) {
					$paymentupdate = PaymentHistory::find($paymenthistory->id);
					$cityname = $request->input('business_name');
					$clientIDToAppend = $clientID = $client->id;
					/* if(strlen((string)$clientID)<4){
					$clientIDToAppend = str_pad($clientIDToAppend, 4, '0', STR_PAD_LEFT);
					} */
					$order_number = strtoupper(substr($cityname, 0, 2)) . $clientIDToAppend . $paymenthistory->id;
					$paymentupdate->order_number = $order_number;
					$paymentupdate->save();

					/* $assignKeyword = DB::table('assigned_kwds')
								->join('cities','assigned_kwds.city_id','=','cities.id')
								->join('parent_category','assigned_kwds.parent_cat_id','=','parent_category.id')
								->join('child_category','assigned_kwds.child_cat_id','=','child_category.id')
								->join('keyword','assigned_kwds.kw_id','=','keyword.id')
								->select('assigned_kwds.*','cities.city','parent_category.parent_category','child_category.child_category','keyword.keyword')
								->where('assigned_kwds.client_id',$client->id)
								->get();

					Mail::send('emails.send_client-orderform',['client'=>$client,'order_number'=>$order_number,'total_amount'=>$total_amount,'paid_amount'=>$paid_amount,'gst_tax'=>$gst_tax,'tds_amount'=>$tds_amount,'payment_mode'=>$stud_payment_mode,'assignKeyword'=>$assignKeyword,'paid_amt_in_words'=>$paid_amt_in_words,'pay_mode_details'=>$pay_mode_details,'transactionid'=>$transactionid,'paymentupdate'=>$paymentupdate], function ($m) use ($client) {
				$m->from('info@quickdials.com', 'quickdials');
				$email = "info@quickdials.com";
				$m->to("info@quickdials.com", $client->first_name." ".$client->last_name)->subject('quickdials Order Details')->cc('help@quickdials.com');
			}); */



					return response()->json(['status' => 1, 'success' => 'Client Order payment successfully !!']);
				} else {
					return response()->json(['status' => 0, 'failed' => 'Client not updated !!']);
				}



			}

		}
	}

 

    public function getOrderHistory(Request $request, string $id)
    {
        $vendor = Client::where('username', $id)->firstOrFail();

        // यहाँ अपनी existing sales authorization check लगाएँ।
        $perPage = min(max((int) $request->input('per_page', 10), 1), 50);

        $payments = DB::table('payment_histories')
            ->where('client_id', $vendor->id)
            ->select(
                'id',
                'created_at',
                'paid_amount',
                'gst_tax',
                'total_amount',
                'payment_mode',
                'invoice_status'
            )
            ->orderByDesc('created_at')
            ->orderByDesc('id')
            ->paginate($perPage);

        $payments->getCollection()->transform(function ($payment) {
            $payment->date = $payment->created_at
                ? \Carbon\Carbon::parse($payment->created_at)->format('d M Y')
                : '';

            return $payment;
        });

        return response()->json($payments);
    }



}