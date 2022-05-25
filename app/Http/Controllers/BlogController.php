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

    public function blog()
    {   
        $blogs = $this->blogmodule->viewBlog();

        return view('blog')->with(compact('blogs'));
    }

    public function blogDetails()
    {
        return view('blogdetails');
    }

}
