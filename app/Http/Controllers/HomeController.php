<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\UserModule;
use App\Modules\PetModule;
use App\Modules\AdoptModule;
use App\Modules\ClaimModule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $usermodule;
    protected $petmodule;
    protected $adoptmodule;
    protected $claimmodule;

    public function __construct(UserModule $user, PetModule $pet, AdoptModule $adopt, ClaimModule $claim)
    {
        $this->middleware('auth');
        $this->usermodule = $user;
        $this->petmodule = $pet;
        $this->adoptmodule = $adopt;
        $this->claimmodule = $claim;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->usermodule->countUsers();
        $pets = $this->petmodule->countUnapprovedPet();
        $pendings = $this->petmodule->latestPending();
        return view('admin.dashboard')->with(compact('users','pets', 'pendings'));
    }
}
