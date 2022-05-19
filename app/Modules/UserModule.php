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
		return User::where('email', $email)->where('status','active')->where('is_approved','1')->first();
	}

	public function emailValidataion($email)
	{
		return User::where('email', $email)->first();
	}

	public function management()
	{
		$request = request();

		$query = User::where('is_approved', 1);

		if($request->has('status')) { 
			$query->where('status', $request->get('status'));
		} else $query;

		return $query->orderBy('updated_at','desc')->paginate(10);
	}

	public function verify()
	{
		return User::where('is_approved', 0)->orderBy('id','desc')->paginate(10);
	}

	public function details($setid)
	{
		return User::where('id',$setid)->first();
	}

	public function countUnapprovedUser()
	{
		return User::where('is_approved',0)->count();
	}

	public function update($setid, $data)
	{
		return User::find($setid)->update($data);
	}
	public function updateIsAprroved($setid, $data)
	{
		return User::find($setid)->update($data);
	}

	public function declineUser($setid)
	{
		return DB::table('users')->where('id', $setid)->delete();
	}
}


