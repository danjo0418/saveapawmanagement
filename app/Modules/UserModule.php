<?php 

namespace App\Modules;

use App\User;
use DB;

class UserModule
{
	public function create($data)
	{	
		return User::create($data);
	}	

	public function active($email)
	{
		return User::where('email', $email)->where('status','active')->first();
	}

	public function emailValidataion($email)
	{
		return User::where('email', $email)->first();
	}

	public function management()
	{
		$request = request();

		$query = User::where('role_id', '!=' ,1)->where('is_delete', 0);

		if($request->has('status')) { 
			$query->where('status', $request->get('status'));
		} else $query;

		return $query->orderBy('updated_at','desc')->paginate(10);
	}

	public function details($setid)
	{
		return User::where('id',$setid)->first();
	}

	public function update($setid, $data)
	{
		return User::find($setid)->update($data);
	}
}


