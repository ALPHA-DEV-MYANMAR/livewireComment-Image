<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;
    
    public function login(){

        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

    }

    public function render()
    {
        return view('livewire.login');
    }
}
