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
        ], [
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El campo email debe ser un email válido.',
            'password.required' => 'El campo contraseña es obligatorio.',
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
