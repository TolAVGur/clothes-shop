<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;

class ShopComponent extends Component
{
    use WithPagination;

    public function store_to_cart($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product'); // 1- форматирование денежных едениц(0/1)
        session()->flash('message', 'Вибраний виріб додано до кошику!');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $products = Product::orderBy('updated_at', 'DESC')->paginate(9);

        return view('livewire.shop-component', ['products' => $products])->layout('layouts.base');
    }
}
