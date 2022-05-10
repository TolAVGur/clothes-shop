<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Cart;

class ShopComponent extends Component
{
    use WithPagination;

    public $sorting;
    public $pagesize;

    public function mount() {
        $this->sorting = "default";
        $this->pagesize = 3;
    }


    public function store_to_cart($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product'); // 1- форматирование денежных едениц(0/1)
        session()->flash('message', ''.$product_name.' додано до кошику!');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::paginate($this->pagesize);

        return view('livewire.shop-component', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ])->layout('layouts.base');
    }
}
