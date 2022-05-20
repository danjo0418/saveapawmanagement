<?php 

namespace App\Modules;

use App\Adopt;
use DB;
use Auth;

class AdoptModule
{
	public function create($data)
	{
		return Adopt::create($data);
	}

	public function adopt()
	{
		$request = request();

		$query = Adopt::with('pet','user')->where('is_delete','0');

		if($request->has('filter')) { 
			$query->where(DB::raw("(DATE_FORMAT(created_at,'%Y-%m-%d'))"), "=", $request->get('filter'));
		} else $query;

		return $query->orderBy('updated_at', 'DESC')->paginate(10);
	}

	public function update($setid, $data)
	{
		return Adopt::find($setid)->update($data);
	}
}