<?php 

namespace App\Modules;
use App\Adopt;
use App\Claim;
use App\Pet;
use App\User;

use Auth;

Class Helpers 
{
	public static function countAdopt()
	{
		return Adopt::where('is_delete', 0)->count();
	}

	public static function countClaim()
	{
		return Claim::where('is_delete', 0)->count();
	}

	public static function countUnapprovedPet()
	{
		return Pet::where('is_approved', 0)->count();
	}

	public static function countUnapprovedUser()
	{
		return User::where('is_approved',0)->count();
	}
}