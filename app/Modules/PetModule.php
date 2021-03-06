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
		return Pet::with('user')->where('status','adopt')->where('is_approved',1)->where('is_adopt', '0')->orderBy('updated_at','desc')->paginate(9);
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

		$query = Pet::with('user')->where('is_approved',1)->where('is_adopt',0)->where('is_claim',0);

		if($request->has('status')) $query->where('status', $request->get('status'));
		else $query;

		return $query->orderBy('updated_at','desc')->paginate(10);
	}

	public function pending()
	{

		$request = request();

		$query = Pet::with('user')->where('is_approved', 0);

		if($request->has('filter')) { 
			$query->where(DB::raw("(DATE_FORMAT(created_at,'%Y-%m-%d'))"), "=", $request->get('filter'));
		} else $query;

		return $query->orderBy('updated_at', 'DESC')->paginate(10);

	}

	public function update($setid, $data)
	{
		return Pet::find($setid)->update($data);
	}

	public function myPost()
	{

		$request = request();

		$query = Pet::where('user_id','=' ,Auth::user()->id);

		if($request->has('filter')) { 
			$query->where(DB::raw("(DATE_FORMAT(created_at,'%Y-%m-%d'))"), "=", $request->get('filter'));
		} else $query;

		return $query->orderBy('updated_at', 'DESC')->paginate(10);

	}

	public function countUnapprovedPet()
	{
		return Pet::where('is_approved', 0)->count();
	}


	public function latestPending()
	{
		return Pet::with('user')->where('is_approved', 0)->orderBy('updated_at', 'DESC')->limit(5)->get();
	}
}