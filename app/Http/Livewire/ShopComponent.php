<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ShopComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::orderBy('updated_at', 'DESC')->paginate(9);

        return view('livewire.shop-component', ['products' => $products])->layout('layouts.base');
    }
}
