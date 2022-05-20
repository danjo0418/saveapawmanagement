<?php 

namespace App\Modules;

use App\Claim;
use DB;
use Auth;

class ClaimModule
{
	public function create($data)
	{
		return Claim::create($data);
	}

	public function claim()
	{

		$request = request();

		$query = Claim::with('pet','user')->where('is_delete','0');

		if($request->has('filter')) { 
			$query->where(DB::raw("(DATE_FORMAT(created_at,'%Y-%m-%d'))"), "=", $request->get('filter'));
		} else $query;

		return $query->orderBy('updated_at', 'DESC')->paginate(10);
	}
}