<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class AdminDashboardComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        $categories = Category::orderBy('updated_at', 'DESC')->paginate(10);
        $brands = Brand::orderBy('updated_at', 'DESC')->paginate(10);
        return view('livewire.admin.admin-dashboard-component', [
            'users' => $users,
            'categories' => $categories,
            'brands'=> $brands
            ])->layout('layouts.base');
    }
}
