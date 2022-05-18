<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminDashboardComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::orderBy('updated_at', 'DESC')->paginate();
        $users = User::orderBy('updated_at', 'DESC')->paginate();
        $categories = Category::orderBy('updated_at', 'DESC')->paginate();
        $brands = Brand::orderBy('updated_at', 'DESC')->paginate();
        
        return view('livewire.admin.admin-dashboard-component', [
            'products' => $products,
            'users' => $users,
            'brands'=> $brands,
            'categories' => $categories
            ])->layout('layouts.base');
    }
}
