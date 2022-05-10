<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug) {
        $this->slug = $slug;
    }

    public function store_to_cart($product_id, $product_name, $product_price) {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('message', ''.$product_name.' додано до кошику!');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.details-component', [
            'product' => $product,
            'brands' => $brands,
            'categories' => $categories
            ])->layout('layouts.base');
    }
}
