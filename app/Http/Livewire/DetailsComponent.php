<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Brand;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug) {
        $this->slug = $slug;
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
