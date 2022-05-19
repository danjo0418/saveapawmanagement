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
		return Claim::with('pet','user')->where('is_delete','0')->get();
	}
}