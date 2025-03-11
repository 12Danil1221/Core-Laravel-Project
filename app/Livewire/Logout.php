<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Tymon\JWTAuth\Facades\JWTAuth;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.logout');
    }

}