<?php 

namespace App\Modules;

use App\BLog;
use App\Comment;
use DB;
use Auth;

class BlogModule
{
	public function create($data)
	{
		return Blog::create($data);
	}

	public function update($setid, $data)
	{
		return Blog::find($setid)->update($data);
	}

	public function myBlog()
	{
		return Blog::with('user')->where('user_id', Auth::user()->id)->orderBy('updated_at', 'DESC')->paginate(12);
	}

	public function view()
	{
		return Blog::with('user')->orderBy('updated_at', 'DESC')->paginate(12);
	}


	public function details($setid)
	{
		return Blog::with('user','comments.owner')->where('id',$setid)->orderBy('updated_at', 'DESC')->first();
	}

	public function comment($data)
	{
		return Comment::create($data);
	}


}