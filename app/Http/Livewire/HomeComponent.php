<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;

class HomeComponent extends Component
{
    use WithPagination;
    
    public function store_to_cart($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product'); // 1- форматирование денежных едениц(0/1)
        session()->flash('message', 'Вибраний виріб додано до кошику!');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        $products = Product::inRandomOrder()->limit(6)->get(); // заглушка рандомно 6 товаров
        return view('livewire.home-component', [
            'products' => $products,
        ])->layout('layouts.base');
    }
}
