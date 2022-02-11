<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistrationComponent extends Component
{
    public function render()
    {
        return view('livewire.registration-component')->layout('layouts.base');
    }
}
