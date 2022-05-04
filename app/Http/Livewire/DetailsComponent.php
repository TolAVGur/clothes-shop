<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Brand;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug) {
        $this->slug = $slug;
    }

    public function store_to_cart($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('message', 'Вибраний виріб додано до кошику!');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $brands = Brand::get();
        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.details-component', [
            'product' => $product,
            'brands' => $brands,
            ])->layout('layouts.base');
    }
}
