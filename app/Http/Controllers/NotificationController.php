<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\UserModule;
use App\Modules\PetModule;
use App\Modules\AdoptModule;
use App\Modules\ClaimModule;

use Auth;


class NotificationController extends Controller
{
    protected $usermodule;
    protected $petmodule;
    protected $adoptmodule;
    protected $claimmodule;

    public function __construct(UserModule $user, PetModule $pet, AdoptModule $adopt, ClaimModule $claim) 
    {
        $this->usermodule = $user;
        $this->petmodule = $pet;
        $this->adoptmodule = $adopt;
        $this->claimmodule = $claim;
    }

    // public function index()
    // {

    //     $verifyuser = $this->usermodule->countUnapprovedUser(); 
    //     $verifypet = $this->petmodule->countUnapprovedPet();
    //     $claimpet = $this->claimmodule->countClaim();
    //     $adoptpet = $this->adoptmodule->countAdopt();

    //     return view('notification.index')->with(compact('verifyuser','verifypet','claimpet','adoptpet'));
    // }

    public function claimPets()
    {
        return $this->claimmodule->claim();
        
        return view('notification.claim');
    }

    public function adoptPets()
    {
        return view('notification.adopt');
    }
}
