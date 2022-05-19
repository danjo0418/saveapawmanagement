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

    public function claimPets()
    {
        $claims = $this->claimmodule->claim();
        return view('notification.claim')->with(compact('claims'));
    }

    public function adoptPets()
    {
        return view('notification.adopt');
    }
}
