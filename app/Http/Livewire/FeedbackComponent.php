<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FeedbackComponent extends Component
{
    public function render()
    {
        return view('livewire.feedback-component')->layout('layouts.base');
    }
}
