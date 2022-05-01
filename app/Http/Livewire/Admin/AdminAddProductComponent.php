<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads; // библиотека реализации загрузки файлов
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Str;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $name, $slug, $short_description, $description, $sizes, $sale_price, 
    $discount, $sku, $stock_status, $featured, $quantity, $image, $images, 
    $category_id, $brand_id;

    public function generate_slug() {
        $this->slug = Str::slug($this->name);
    }

    public function store_product() {
        $new_product = new Product();
        $new_product->name = $this->name;
        $new_product->slug = $this->slug;
        $new_product->short_description = $this->short_description;
        $new_product->description = $this->description;
        $new_product->sizes = $this->sizes;
        $new_product->sale_price = $this->sale_price;
        $new_product->discount = $this->discount;
        $new_product->sku = $this->sku;
        $new_product->stock_status = 'instock';
        $new_product->featured = 0;
        $new_product->quantity = $this->quantity;
        
        if(!empty($this->image)) {
            $this->image->storeAs('public/images/shop', $new_product->slug.'.'.$this->image->getClientOriginalExtension());
            $new_product->image = $new_product->slug.'.'.$this->image->getClientOriginalExtension();
        }
        
        $new_product->images = $this->images;
        $new_product->category_id = $this->category_id;
        $new_product->brand_id = $this->brand_id;
        $new_product->save();
        session()->flash('message', 'Товар "'.$this->name.'" додано успішно!');
        $this->name = "";
        $this->slug = "";
    }
    
    public function render()
    {
        $brands = Brand::get();
        $categories = Category::get();
        $products = Product::orderBy('updated_at', 'DESC')->paginate(10);
        return view('livewire.admin.admin-add-product-component', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ])->layout('layouts.base');
    }
}
