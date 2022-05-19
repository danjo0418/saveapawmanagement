<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Modules\PetModule;
use App\Modules\AdoptModule;
use App\Modules\ClaimModule;


use Carbon\Carbon;
use Image;

class PetController extends Controller
{
    protected $petmodule;
    protected $adoptmodule;

    //USERS
    public function __construct(PetModule $pet, AdoptModule $adopt, ClaimModule $claim)
    {
        $this->petmodule = $pet;
        $this->adoptmodule = $adopt;
        $this->claimmodule = $claim;
    }


    public function listOfAdopt()
    {   
        $adopt = $this->petmodule->adopt();
        return view('user.adopt')->with(compact('adopt'));
    }

    public function listOfLostAndFound()
    {   
        $lostandfound = $this->petmodule->lostAndFound();
        return view('user.lostandfound')->with(compact('lostandfound'));
    }

    public function petDetails($getid)
    {
        $petdetail = $this->petmodule->details($getid);

        return view('user.petdetail')->with(compact('petdetail'));
    }

    public function userPetForm()
    {
        return view('user.petform');
    }


    public function myPets()
    {
        $mypets = $this->petmodule->myPost();
        return view('user.mypets')->with(compact('mypets'));
    }

    public function myPetDetails($getid)
    {
        $detail = $this->petmodule->details($getid);
        return view('user.mypetdetails')->with(compact('detail'));
    }


    //ADMINISTRATOR

    public function petManagement()
    {
        $management = $this->petmodule->management();
        $count = $this->petmodule->countUnapprovedPet();
        return view('admin.petsmanagement')->with(compact('management','count'));;
    }

    public function petManagementDetails($getid)
    {
        $detail = $this->petmodule->details($getid);
        return view('admin.petdetails')->with(compact('detail'));
    }

    public function petVerification()
    {
        $verify = $this->petmodule->pending();
        return view('admin.petverify')->with(compact('verify'));
    }

    public function petForm()
    {
        return view('admin.petform');
    }

    public function petCreate()
    {

        $request = request();

        // get file
        $file = $request->image;
        $filename = str_replace(' ','', time().$file->getClientOriginalName());
        $filextension =  $file->clientExtension();

        $data = ['user_id'=> $request->userid,
                       'status'=> $request->status,
                       'name'=> $request->name,
                       'breed'=> $request->breed,
                       'color'=> $request->color,
                       'gender'=> $request->gender,
                       'age'=> $request->age,
                       'filename'=> $filename,
                       'description'=> $request->description,
                       'is_approved' => $request->is_approved];

        if(in_array($filextension, ['jpeg','jpg','png','gif'])) {

            $resize = Image::make($file->getRealPath());

            $thumbnail = $resize->resize(null,220, function($constraint) {
                            $constraint->aspectRatio();
                        })->save(base_path().'/public/asset/images/pets/thumb/'.$filename,60); 

            $create = $this->petmodule->create($data);

            if($create) {

                $message;

                if(Auth::user()->role_id == 1) $message = "Pet was successfully added.";
                else  $message = 'Pet was successfully submitted. and waiting for admin approval';

                return redirect()->back()->with('success', $message); 
            }

        } else  return redirect()->back()->with('error', 'Invalid file extention'); 
    }

    public function petUpdate()
    {
        $request = request();

        $data = ['status'=> $request->status,
                 'name'=> $request->name,
                 'breed'=> $request->breed,
                 'color'=> $request->color,
                 'gender'=> $request->gender,
                 'age'=> $request->age,
                 'description'=> $request->description];

        if($request->hasFile('image')) {

            $file = $request->image;
            $filename = str_replace(' ','', time().$file->getClientOriginalName());
            $filextension =  $file->clientExtension();
            
            if(in_array($filextension, ['jpeg','jpg','png','gif'])) {

                $resize = Image::make($file->getRealPath());

                $thumbnail = $resize->resize(null,220, function($constraint) {
                            $constraint->aspectRatio();
                        })->save(base_path().'/public/asset/images/pets/thumb/'.$filename,60); 

                $data = ['filename' => $filename];

                $update = $this->petmodule->update($request->petid, $data);

                if($update) {

                     return redirect()->back()->with('success', "Pet details was already updated.");

                } else return redirect()->back()->with('error', 'YAWAAAAA'); 

            } else return redirect()->back()->with('error', 'Invalid File extention'); 

        } else {

            $update = $this->petmodule->update($request->petid, $data);
            if($update) {
                return redirect()->back()->with('success', 'Pet details was already updated'); 
            }
        }
    }

    public function petApprove()
    {
        $request = request();

        $data = ['id' => $request->petid, 'is_approved' => $request->is_approved];
        $approve = $this->petmodule->update($request->petid, $data);

        if($approve) {

            if($request->is_approved == 1) return redirect('admin/pets-management')->with('success', "Pet is approved and visible on website for viewing.");
            else return redirect('admin/pets-management')->with('error', "Pet is declined, Due to unreliable information.");
        }

    }

    public function adoptForm()
    {
        $request = request();

        // get file
        $file = $request->image;
        $filename = str_replace(' ','', time().$file->getClientOriginalName());
        $filextension =  $file->clientExtension();

        $data = ['pet_id' => $request->petid,
                 'user_id' => $request->userid,
                 'no_pet' => $request->no_pet,
                 'reason' => $request->reasons,
                 'id_type' => $request->type_id,
                 'id_no' => $request->id_no,
                 'filename' => $filename];

        if(in_array($filextension, ['jpeg','jpg','png','gif'])) {

            $resize = Image::make($file->getRealPath());

            $thumbnail = $resize->resize(null,220, function($constraint) {
                        $constraint->aspectRatio();
                    })->save(base_path().'/public/asset/images/valid/'.$filename,60); 


            $create = $this->adoptmodule->create($data);

            if($create) {

                 return redirect()->back()->with('success', "Successfully submitted.");

            } else return redirect()->back()->with('error', 'YAWAAAAA');

        } else return redirect()->back()->with('warning', 'Invalid File extention'); 
    }

    public function claimForm()
    {
        $request = request();

        // get file
        $file = $request->image;
        $filename = str_replace(' ','', time().$file->getClientOriginalName());
        $filextension =  $file->clientExtension();

        $data = ['pet_id' => $request->petid,
                 'user_id' => $request->userid,
                 'filename' => $filename,
                 'witness_email' => $request->witness_email,
                 'witness_name' => $request->witness_name,
                 'witness_contact' => $request->witness_no];


        if(in_array($filextension, ['jpeg','jpg','png','gif'])) {

            $resize = Image::make($file->getRealPath());

            $thumbnail = $resize->resize(null,220, function($constraint) {
                        $constraint->aspectRatio();
                    })->save(base_path().'/public/asset/images/lost/'.$filename,60); 


            $create = $this->claimmodule->create($data);

            if($create) {

                 return redirect()->back()->with('success', "Successfully submitted.");

            } else return redirect()->back()->with('error', 'YAWAAAAA');

        } else return redirect()->back()->with('warning', 'Invalid File extention'); 

    }
}
