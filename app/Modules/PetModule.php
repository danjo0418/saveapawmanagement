<?php 

namespace App\Modules;

use App\Pet;
use DB;
use Auth;

class PetModule
{
	public function create($data)
	{
		return Pet::create($data);
	}

	public function adopt()
	{
		return Pet::where('status','adopt')->where('is_approved',1)->where('is_adapt', '0')->orderBy('updated_at','desc')->paginate(9);
	}

	public function lostAndFound()
	{
		return Pet::where('status','lostandfound')->where('is_approved',1)->where('is_claim', '0')->orderBy('updated_at','desc')->paginate(9);
	}

	public function details($setid)
	{
		return Pet::with('user')->where('id', $setid)->first();
	}

	public function management()
	{
		$request = request();

		$query = Pet::with('user')->where('is_approved',1)->where('is_adapt',0)->where('is_claim',0);

		if($request->has('status')) $query->where('status', $request->get('status'));
		else $query;

		return $query->orderBy('updated_at','desc')->paginate(10);
	}

	public function pending()
	{


		//return Pet::with('user')->where(DB::raw("(DATE_FORMAT(updated_at,'%Y-%m-%d'))"), "=", $q)->get();

		$request = request();

		$query = Pet::with('user')->where('is_approved', 0);

		if($request->has('filter')) { 
			$query->where(DB::raw("(DATE_FORMAT(updated_at,'%Y-%m-%d'))"), "=", $request->get('filter'));
		} else $query;

		return $query->orderBy('updated_at', 'DESC')->paginate(10);

	}

	public function countUnapprovedPet()
	{
		return Pet::where('is_approved', 0)->count();
	}

	public function update($setid, $data)
	{
		return Pet::find($setid)->update($data);
	}

	public function myPost()
	{
		return Pet::where('user_id','=' ,Auth::user()->id)->orderBy('updated_at','DESC')->paginate(10);
	}
}