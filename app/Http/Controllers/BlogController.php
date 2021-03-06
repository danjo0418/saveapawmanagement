<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Modules\BlogModule;
use App\Modules\NotificationsModule;
use Image;


class BlogController extends Controller
{   

    protected $blogmodule;
    protected $notificationsmodule;

    public function __construct(BlogModule $blog, NotificationsModule $notif)
    {
        $this->blogmodule = $blog;
        $this->notificationsmodule = $notif;
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

    public function leaveComment(Request $request)
    {

        
        $data = ['blog_id'=>$request->blogid, 'user_id'=>$request->userid, 'message'=>$request->message];
        $create = $this->blogmodule->comment($data);
 
        if($create) {

            // for notifications

           $notify = ['type'=> 'comments', 'url_id'=>$request->blogid, 'receiver_id'=>$request->blogowner, 'comment_id'=> $request->userid];

           $this->notificationsmodule->create($notify);


            return response()->json(['status' => 'success']);
        }

    }

    public function removeComment($commentid)
    {
        $delete = $this->blogmodule->deleteComment($commentid);

        if($delete) {
            return response()->json(['status' => 'success']);
        }
    }


     public function commentView($blogid)
    {
        $comments = $this->blogmodule->commentJsonView($blogid);
        return response()->json($comments);
    }


    public function form()
    {
        return view('blogform');
    }

    public function formCreate()
    {

        $request = request();

        $file = $request->image;
        $filename = str_replace(' ','', time().$file->getClientOriginalName());
        $filextension =  $file->clientExtension();

        $data = ['user_id'=>$request->userid, 'filename'=>$filename, 'title'=>$request->title, 'description'=>$request->description];

        if(in_array($filextension, ['jpeg','jpg','png','gif'])) {

            $resize = Image::make($file->getRealPath());

            $thumbnail = $resize->resize(null,400, function($constraint) {
                            $constraint->aspectRatio();
                        })->save(base_path().'/public/asset/images/blogs/'.$filename,60); 

            $create = $this->blogmodule->create($data);

            if($create) {
                return redirect()->back()->with('success', 'Your blog was successfully posted'); 
            }

        } else  return redirect()->back()->with('error', 'Invalid file extention'); 
    }

    public function formUpdate()
    {
        $request = request();

        

        $data = ['title'=>$request->title, 'description'=>$request->description];


        if($request->hasFile('image')) {


            $file = $request->image;
            $filename = str_replace(' ','', time().$file->getClientOriginalName());
            $filextension =  $file->clientExtension();

            if(in_array($filextension, ['jpeg','jpg','png','gif'])) {

                $resize = Image::make($file->getRealPath());

                $thumbnail = $resize->resize(null,400, function($constraint) {
                                $constraint->aspectRatio();
                            })->save(base_path().'/public/asset/images/blogs/'.$filename,60); 

                $data = ['filename' => $filename];

                $update = $this->blogmodule->update($request->blogid, $data);

                if($update) {
                    return redirect()->back()->with('success', 'Your blog was successfully posted'); 
                }

             } else  return redirect()->back()->with('error', 'Invalid file extention'); 

        } else {

            $update = $this->blogmodule->update($request->blogid, $data);

            if($update) {
                return redirect()->back()->with('success', 'Your blog was successfully updated'); 
            }

        }
    }

}
