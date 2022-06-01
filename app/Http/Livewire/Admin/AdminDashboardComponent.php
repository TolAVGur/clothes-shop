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
        return view('livewire.admin.admin-dashboard-component')->layout('layouts.base');
    }
}
