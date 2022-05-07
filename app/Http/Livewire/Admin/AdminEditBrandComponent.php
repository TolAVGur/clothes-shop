<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;

class AdminEditBrandComponent extends Component
{
    public $name;
    public $country;

    public function mount($brand_id) {
        $brand = Brand::where('id', $brand_id)->first();
        $this->brand_id = $brand->id;
        $this->name = $brand->name;
        $this->country = $brand->country;
    }

    public function update_brand() {
        $brand = Brand::find($this->brand_id);
        $brand->name = $this->name;
        $brand->country = $this->country;
        $brand->save();
        session()->flash('message', 'Бренд "'.$this->name.'" оновлен успішно!');
        return redirect()->route('admin.brands');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-brand-component')->layout('layouts.base');
    }
}
