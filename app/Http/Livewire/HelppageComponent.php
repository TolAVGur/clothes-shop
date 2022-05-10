<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Brand;

class HelppageComponent extends Component
{
    public function render()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('livewire.helppage-component', [
            'categories' => $categories,
            'brands' => $brands,
        ])->layout('layouts.base');
    }
}
