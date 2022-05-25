<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Modules\UserModule;

use Validator;
use Redirect;
use Response;
use Session;
use Image;



class UserController extends Controller
{
    protected $usermodule;

    public function __construct(UserModule $user) 
    {
        $this->usermodule = $user;
    }

    public function newLogin()
    {   


        $request = request();
        $credential = $request->only('email', 'password');
        $user = $this->usermodule->active($request->email);
        
        if(is_object($user)) {

            if($user->status == 'active') {

                if(Auth::attempt($credential)) {

                    if($user->role_id <= 2) return Redirect::to('dashboard');
                    else return Redirect::to('about-us');

                } else  return redirect()->back()->with('invalid', 'These credentials do not match our records.');  

            } else  return redirect()->back()->with('invalid', 'These credentials do not match our records.');

        } else  return redirect()->back()->with('invalid', 'These credentials do not match our records.'); 
    }

    public function newRegister()
    {
        $request = request();

        $data = [ 'role_id' => '3',
                  'email' => $request->email,
                  'password' => Hash::make($request->password),
                  'fname' => $request->fname,
                  'mname' => $request->mname,
                  'lname' => $request->lname,
                  'address' => $request->address,
                  'gender' => $request->gender,
                  'birthday' => $request->birthday,
                  'contact' => $request->contact,
                  'own_pet' => $request->own_pet,
                  'status' => 'active',
                  'profile' => 'avatar.png'];

        $emailValidation = $this->usermodule->emailValidataion($request->email);

        if(!is_object($emailValidation)) {

            if($request->password == $request->password_confirmation) {

                $create = $this->usermodule->create($data);

                if($create) {
                    return redirect()->back()->with('success', 'Credential was successfully registered.'); 
                }

            } else return redirect()->back()->with('confirm', 'Password does not match'); 

        } else return redirect()->back()->with('email', 'Email is already use. Please provide other email'); 
    }

    public function about()
    {
        return view('user.about');
    }

    public function userManagement()
    {
        $users = $this->usermodule->management();
        return view('admin.usersmanagement')->with(compact('users'));
    }

    public function userManagementdetails($getid)
    {
        $details =  $this->usermodule->details($getid);
        return view('admin.userdetails')->with(compact('details'));
    }

    public function userFormpage()
    {
        return view('admin.userform');
    }

    public function userCreate()
    {
        $request = request();

        $data = [ 'role_id' => '2',
                  'email' => $request->email,
                  'password' => Hash::make($request->password),
                  'fname' => $request->fname,
                  'mname' => $request->mname,
                  'lname' => $request->lname,
                  'address' => $request->address,
                  'gender' => $request->gender,
                  'birthday' => $request->birthday,
                  'contact' => $request->contact,
                  'status' => 'active',
                  'profile' => 'avatar.png'];

        $emailValidation = $this->usermodule->emailValidataion($request->email);

        if(!is_object($emailValidation)) {

            if($request->password == $request->confirmpassword) {

                $create = $this->usermodule->create($data);

                if($create) {
                    return redirect()->back()->with('success', 'New administrator was successfully created.'); 
                }

            } else  return redirect()->back()->with('confirm', 'Password does not match'); 

        } else return redirect()->back()->with('email', 'Email is already use. Please provide other email'); 
    }

    public function userStatus()
    {
        $request = request();

        $data = ['status' => $request->status];

        $update = $this->usermodule->update($request->userid, $data);

        if($update) {

            $message;

            if($request->status == 'inactive') $message = "User is already inactive";
            else $message = "User is already activated";

            return redirect()->back()->with('success', $message);
        }
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile()
    {
        $request = request();

        $data = [ 'fname' => $request->fname,
                  'mname' => $request->mname,
                  'lname' => $request->lname,
                  'address' => $request->address,
                  'gender' => $request->gender,
                  'birthday' => $request->birthday,
                  'contact' => $request->contact];

        if($request->hasFile('image')) {

            $file = $request->image;
            $filename = str_replace(' ','', time().$file->getClientOriginalName());
            $filextension =  $file->clientExtension();
            
            if(in_array($filextension, ['jpeg','jpg','png','gif'])) {

                $resize = Image::make($file->getRealPath());

                $thumbnail = $resize->resize(null,220, function($constraint) {
                            $constraint->aspectRatio();
                        })->save(base_path().'/public/asset/images/users/thumb/'.$filename,60); 

                $data = ['profile' => $filename];

                $update = $this->usermodule->update($request->userid, $data);

                if($update) {
                     return redirect()->back()->with('success', "User details was already updated.");
                } else return redirect()->back()->with('error', 'YAWAAAAA'); 

            } else return redirect()->back()->with('error', 'Invalid file extention'); 

        } else {
            
            $update = $this->usermodule->update($request->userid, $data);

            if($update) {
                 return redirect()->back()->with('success', "User details was already updated.");
            }
        }
    }
}
