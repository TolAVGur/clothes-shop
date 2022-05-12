<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CheckoutComponent extends Component
{
    public $checkshipping;

    public function choiceOfDelivery() {
        if($this->checkshipping == 'across_ukr') {

        } else if ($this->checkshipping == 'courier_kiev') {

        } else {

        }
    }

    public function render()
    {
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
