<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    /* 
    use WithFileUploads;

    public $product_id, $name, $slug, $short_description, $description, $sizes, $sale_price, 
    $discount, $sku, $stock_status, $featured, $quantity, $image, $images;

    public function mount($product_id){
        $product = Product::where('id', $product_id)->first();
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->sizes = $product->sizes;
        $this->sale_price = $product->sale_price;
        $this->discount = $product->discount;
        $this->sku = $product->sku;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->images = $product->images;
       // $this->category_id = $product->category_id;
       // $this->brand_id = $product->brand_id;
    }

    public function generate_slug() {
        $this->slug = Str::slug($this->name);
    }

    public function update_product() {
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->sizes = $this->sizes;
        $product->sale_price = $this->sale_price;
        $product->discount = $this->discount;
        $product->sku = $this->sku;
        $product->stock_status = 'instock';
        $product->featured = 0;
        $product->quantity = $this->quantity;
        
        if(!empty($this->image)) {
            $newimage_name = $product->slug.'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs('public/images/shop', $newimage_name);
            $product->image = $newimage_name;
        }
        
        $product->images = $this->images;
        //$product->category_id = $this->category_id;
        //$product->brand_id = $this->brand_id;
        $product->save();
        session()->flash('message', 'Інформація про товар '.$this->name.' оновлена успішно!');
    }
    */
    public function render()
    {
        return view(
            'livewire.admin.admin-edit-product-component'
        )->layout('layouts.base');
    }
}
