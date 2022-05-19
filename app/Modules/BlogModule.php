<?php 

namespace App\Modules;

use App\BLog;

class BlogModule
{
	public function viewBlog()
	{
		return Blog::get();
	}
}