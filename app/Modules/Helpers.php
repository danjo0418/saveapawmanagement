<?php 

namespace App\Modules;
use App\Adopt;
use App\Claim;
use App\Pet;
use App\User;
use App\Comment;
use App\Notifications;
use Auth;

Class Helpers 
{
	public static function countAdopt()
	{
		return Adopt::where('is_delete', 0)->count();
	}

	public static function countClaim()
	{
		return Claim::where('pet_owner', Auth::user()->id)->where('is_delete', 0)->count();
	}

	public static function countUnapprovedPet()
	{
		return Pet::where('is_approved', 0)->count();
	}

	public static function countComments($setBlogId)
	{
		return Comment::where('blog_id', $setBlogId)->count();
	}

	public static function notifications()
	{
		return Notifications::with('receiver','identifier')->where('receiver_id', Auth::user()->id)->orderBy('id','DESC')->get();
	}
}