<?php 

namespace App\Modules;

use App\Notifications;
use DB;
use Auth;

class NotificationsModule
{
	public function create($data)
	{
		return Notifications::create($data);
	}

}