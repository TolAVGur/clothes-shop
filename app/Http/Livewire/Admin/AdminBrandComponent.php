<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;
use Livewire\WithPagination;

class AdminBrandComponent extends Component
{
    use WithPagination;

    public function delete_brand($id) {
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash('message', 'Бренд видален!');
    }

    public function render()
    {
        $brands = Brand::orderBy('updated_at', 'DESC')->paginate(5);

        return view('livewire.admin.admin-brand-component', ['brands' => $brands])->layout('layouts.base');
    }
}
