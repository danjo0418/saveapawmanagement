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
}