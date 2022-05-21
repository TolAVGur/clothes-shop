<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Cart;

class BrandComponent extends Component
{
    use WithPagination;

    public $sorting;
    public $pagesize;
    public $brand_id;

    public function mount($brand_id)
    {
        $this->sorting = "default";
        $this->pagesize = 3;
        $this->brand_id = $brand_id;
    }


    public function store_to_cart($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product'); // 1- форматирование денежных едениц(0/1)
        session()->flash('message', '' . $product_name . ' додано до кошику!');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        //
        $brand = Brand::where('id', $this->brand_id)->first();
        $brand_id = $brand->id;
        $brand_name = $brand->name;


        if ($this->sorting == 'date') {
            $products = Product::where('brand_id', $brand_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price') {
            $products = Product::where('brand_id', $brand_id)->orderBy('sale_price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Product::where('brand_id', $brand_id)->orderBy('sale_price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('brand_id', $brand_id)->paginate($this->pagesize);
        }

        $brands = Brand::all();
        $categories = Category::all();

        return view('livewire.brand-component', [
            'products' => $products,
            'categories' => $categories,
            'brand_name' => $brand_name,
            'brands' => $brands,
        ])->layout('layouts.base');
    }
}
