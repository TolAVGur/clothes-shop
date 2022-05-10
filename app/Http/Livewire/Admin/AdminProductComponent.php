<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function delete_product($id) {
        $product = Product::find($id);
        $product->delete();
        // видалення фото з диску!
        session()->flash('message', 'Товар видалено!');
    }

    public function render()
    {
        $brands = Brand::get();
        $categories = Category::get();
        $products = Product::orderBy('updated_at', 'DESC')->paginate(7);
        return view('livewire.admin.admin-product-component', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ])->layout('layouts.base');
    }
}
