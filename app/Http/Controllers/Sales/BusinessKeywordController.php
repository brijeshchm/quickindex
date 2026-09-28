<?php

namespace App\Http\Controllers\Sales;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Client\Client;
use Validator; 
use DB;
use App\Models\Zone; 
use App\Models\Keyword;
use App\Models\Citieslists;
 
use App\Models\KeywordSellCount;
use App\Models\Client\AssignedKWDS;
class BusinessKeywordController extends Controller
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
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function assignKeywordDelete(Request $request, $id)
	{
 
 
		$assignedKWDS = AssignedKWDS::findOrFail($id);
 
		if ($assignedKWDS->delete()) {
			$status = 1;
			$msg = "Assigned Keyword delete Successfully!";
		} else {
			$status = 0;
			$msg = "Assigned Keyword could not be Deleted!";
		}
		return response()->json(['status' => $status, 'msg' => $msg], 200);
	}



	 public function bulkDeleteAssignedKeyword(Request $request, string $id)
        {
            $validated = $request->validate([
                'ids'   => ['required', 'array', 'min:1'],
                'ids.*' => ['required', 'integer', 'distinct'],
            ]);

           

            $deleted = AssignedKWDS::where('client_id', $id)
                ->whereIn('id', $validated['ids'])
                ->delete();
 
            return response()->json([
                'success' => true,
                'deleted' => $deleted,
            ]);
        }
	/**
	 * Return Paginated Assigned Keywords
	 *
	 * @param $request - Request class instance
	 * @param $id - ClientID
	 * @return JSON object containing payload
	 */
	public function getPaginatedAssignedKeywords(Request $request)
	{		 
		 
			$clientID = $request->client_id;
			// dd($clientID);
			
   $perPage = min(max((int) $request->input('per_page', 10), 1), 50);

	 



				$keywords = DB::table('assigned_kwds')
    ->join('parent_category', 'assigned_kwds.parent_cat_id', '=', 'parent_category.id')
    ->join('child_category', 'assigned_kwds.child_cat_id', '=', 'child_category.id')
    ->join('keyword', 'assigned_kwds.kw_id', '=', 'keyword.id')
    ->where('assigned_kwds.client_id', $request->integer('client_id'))
    ->select(
        'assigned_kwds.id as assign_id', // यही delete route की ID है
        'keyword.keyword',
        'child_category.child_category',
        'parent_category.parent_category'
    )
    ->orderByDesc('assigned_kwds.id')
    ->paginate($perPage);


			return response()->json($keywords);

		
	}

	public function keywords(Request $request)
	{
		$search = [];
		if ($request->has('search')) {
			$search = $request->input('search');
		}
		$citylist = Citieslists::get();
		 

		$clientID = auth()->guard('clients')->user()->id;
		$keywordlist = Keyword::whereNotExists(function ($query) use ($clientID) {
				$query->select(DB::raw(1))
					->from('assigned_kwds')
					->whereColumn('assigned_kwds.kw_id', 'keyword.id')
					->where('assigned_kwds.client_id', $clientID);
			})->get();
		
		return view('business.keywords', ['search' => $search, 'citylist' => $citylist, 'keywordlist' => $keywordlist, 'clientID' => $clientID]);
	}

	public function saveKeywordAssign(Request $request)
	{
 
 
			$id  = $request->client_id;

				$client = Client::withTrashed()->where('id', $id)->first();

				if (!$client) {
					return response()->json([
						'status' => false,
						'errors' => 'Client not found'
					], 404);
				}
				if (!$client->client_type) {
					return response()->json([
						'status' => false,
						'errors' => 'Kindly update the client package name'
					], 404);
				}

				$keywordArray = $request->input('keyword');

				if (empty($keywordArray) || !is_array($keywordArray)) {
					return response()->json([
						'status' => false,
						'errors' => 'Keyword is required'
					], 400);
				}
// dd($keywordArray);
				$saveStatus = false;

				DB::beginTransaction();

				try {

					$keywordSellCount = KeywordSellCount::where('slug', 'diamond')->first();

					foreach ($keywordArray as $keyid) {

						$keyword = Keyword::find($keyid);
						if (!$keyword) {
							continue;
						}

						// ✅ Fast duplicate check
						$alreadyAssigned = AssignedKWDS::where([
							'client_id' => $client->id,
							'kw_id' => $keyword->id,
							'parent_cat_id' => $keyword->parent_category_id,
							'child_cat_id' => $keyword->child_category_id,
						])->exists();

						if ($alreadyAssigned) {
							continue;
						}

						$assignedKWDS = new AssignedKWDS();
						$assignedKWDS->client_id = $client->id;
						$assignedKWDS->parent_cat_id = $keyword->parent_category_id;
						$assignedKWDS->child_cat_id = $keyword->child_category_id;
						$assignedKWDS->kw_id = $keyword->id;
						$assignedKWDS->sold_on_position = strtolower($client->client_type);
						$keywordSellCount = KeywordSellCount::where('slug', $client->client_type)->first();
						if (!empty($keywordSellCount)) {
							if ($keyword->category === 'Category 1') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat1_price;
							} else if ($keyword->category === 'Category 2') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat2_price;
							} else if ($keyword->category === 'Category 3') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat3_price;
							} elseif ($keyword->category === 'Category 4') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat4_price;
							} elseif ($keyword->category === 'Category 5') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat5_price;
							} elseif ($keyword->category === 'Category 6') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat6_price;
							} elseif ($keyword->category === 'Category 7') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat7_price;
							} elseif ($keyword->category === 'Category 8') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat8_price;
							} elseif ($keyword->category === 'Category 9') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat9_price;
							} elseif ($keyword->category === 'Category 10') {
								$assignedKWDS->sold_on_price = $keywordSellCount->cat10_price;
							} else {
								$assignedKWDS->sold_on_price = '220';
							}
						} else {
							$assignedKWDS->sold_on_price = '220';
						}

						if ($assignedKWDS->save()) {	
						 
							if ($client->client_type == 'diamond' || $client->client_type = 'platinum') {
								$keyword->increment($client->client_type . '_pos_sold');
							}
							$keyword->save();
						}
						$saveStatus = true;
					}

					DB::commit();

				} catch (\Exception $e) {
					DB::rollBack();

					return response()->json([
						'status' => false,
						'errors' => $e->getMessage()
					], 500);
				}

				if ($saveStatus) {
					return response()->json([
						'status' => true,
						'msg' => 'Keyword assigned successfully!'
					]);
				}

				return response()->json([
					'status' => false,
					'msg' => 'No new keyword assigned'
				]);
			
	
	}
}
