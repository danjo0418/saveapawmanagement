<?php 

namespace App\Modules;

use App\BLog;

class BlogModule
{
	public function viewBlog()
	{
		return Blog::orderBy('updated_at', 'DESC')->paginate(12);
	}
}