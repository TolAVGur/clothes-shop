<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug) {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        //$popular_products = Product::inRandomOrder()->limit(4)->get(); // заглушка(фейкова демонстрація) - будь-які 4 товари
        return view('livewire.details-component', [
            'product' => $product,
            //'popular_products' => $popular_products
            ])->layout('layouts.base');
    }
}
