<?php

namespace App\Livewire;

use Livewire\Component;

class LogIn extends Component
{
    public $email;

    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->to('/dashboard');
        }

        $this->addError('email', 'Credenciales incorrectas.');
    }

    public function render()
    {
        return view('livewire.log-in');
    }
}
