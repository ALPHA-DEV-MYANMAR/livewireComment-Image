<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_comfirmation;
    public $message;

    public function register(){

        $this->validate([
            'name' => 'required|max:10',
            'email' => 'required',
            'password' => 'required',
            'password_comfirmation' => 'required'
        ]);

        if($this->password == $this->password_comfirmation){

            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
            ]);
    
            $this->name = '';
            $this->email = '';
            $this->password = '';
            $this->password_comfirmation = '';

            $this->message = 'Successfully Created User✅';

        }else{

            $this->message = 'Something Was Wrong😰';

        }

    }

    public function render()
    {
        return view('livewire.register');
    }
}
