<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class HomeComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::inRandomOrder()->limit(6)->get(); // заглушка рандомно 6 товаров
        return view('livewire.home-component', [
            'products' => $products,
        ])->layout('layouts.base');
    }
}
