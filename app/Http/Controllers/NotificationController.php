<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\UserModule;
use App\Modules\PetModule;
use App\Modules\AdoptModule;
use App\Modules\ClaimModule;
use App\Modules\NotificationsModule;

use Auth;


class NotificationController extends Controller
{
    protected $usermodule;
    protected $petmodule;
    protected $adoptmodule;
    protected $claimmodule;
    protected $notificationsmodule;


    public function __construct(UserModule $user, PetModule $pet, AdoptModule $adopt, ClaimModule $claim, NotificationsModule $notif) 
    {
        $this->usermodule = $user;
        $this->petmodule = $pet;
        $this->adoptmodule = $adopt;
        $this->claimmodule = $claim;
        $this->notificationsmodule = $notif;
    }

    public function claimPets()
    {
        $claims = $this->claimmodule->claim();
        return view('notification.claim')->with(compact('claims'));
    }

    public function claimApproved()
    {
        $request = request();
        $data = ['pet_id' => $request->petid, 'is_delete' => 1 ];

        $claim = $this->claimmodule->update($request->claimid, $data);

        if($claim) {

            $notif = ['type'=>'claim_approved', 'receiver_id'=>$request->petclaimer];
            $this->notificationsmodule->create($notif);

            $newdata = ['is_claim' => 1];
            $this->petmodule->update($request->petid, $newdata);

           return redirect()->back()->with('success', 'Claim Request is already approved'); 
        }
    }

    public function claimDeclined()
    {
        $request = request();
        $data = ['is_delete' => 2 ];

        $claim = $this->claimmodule->update($request->claimid, $data);

        if($claim) {

            $notif = ['type'=>'claim_declined', 'receiver_id'=>$request->petclaimer];
            $this->notificationsmodule->create($notif);

           return redirect()->back()->with('error', 'Claim Request is declined'); 
        }
    }

    public function adoptPets()
    {
        $adopts = $this->adoptmodule->adopt();
        return view('notification.adopt')->with(compact('adopts'));
    }

    public function adoptApproved()
    {
        $request = request();
        $data = ['pet_id' => $request->petid, 'is_delete' => 1 ];

        $adopt = $this->adoptmodule->update($request->adoptid, $data);

        if($adopt) {

            $notif = ['type'=>'adopt_approved', 'receiver_id'=>$request->petadopt];
            $this->notificationsmodule->create($notif);

            $newdata = ['is_adapt' => 1];
            $this->petmodule->update($request->petid, $newdata);

           return redirect()->back()->with('success', 'Adopt Request is already approved'); 
        }

    }

    public function adoptDeclined()
    {
        $request = request();
        $data = ['is_delete' => 2 ];

        $adopt = $this->adoptmodule->update($request->adoptid, $data);

        if($adopt) {

            $notif = ['type'=>'adopt_declined', 'receiver_id'=>$request->petadopt];
            $this->notificationsmodule->create($notif);
            
           return redirect()->back()->with('error', 'Adopt Request is declined'); 
        }
    }
}
