<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WelcomeMessageHome extends Component
{

    public $nombre;

    public function mount(){
        $this->nombre = Auth::user()->nombre;
    }


    public function render()
    {
        return view('livewire.welcome-message-home');
    }
}
