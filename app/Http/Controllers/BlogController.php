<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Modules\BlogModule;

class BlogController extends Controller
{   

    protected $blogmodule;

    public function __construct(BlogModule $blog)
    {
        $this->blogmodule = $blog;
    }

    public function myBlogs()
    {
        $blogs = $this->blogmodule->myBlog();
        return view('myblogs')->with(compact('blogs'));
    }

    public function blog()
    {   
        $blogs = $this->blogmodule->view();

        return view('blog')->with(compact('blogs'));
    }

    public function blogDetails($getid)
    {
         $detail = $this->blogmodule->details($getid);
         return view('blogdetails')->with(compact('detail'));
    }


    public function comment()
    {
        $request = request();
        $data = ['blog_id'=>$request->blogid, 'user_id'=>$request->userid, 'message'=>$request->message];

        $create = $this->blogmodule->comment($data);

        return redirect()->back()->with('success', 'Your comments is already added'); 
    }

}
