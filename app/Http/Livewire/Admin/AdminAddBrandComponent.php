<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;

class AdminAddBrandComponent extends Component
{
    public $name;
    public $country;

    public function store_brand() {
        $brand = new Brand();
        $brand->name = $this->name;
        $brand->country = $this->country;
        $brand->save();
        session()->flash('message', 'Бренд: "'.$this->name.', Країна: '.$this->country.' додан успішно!');
        return redirect()->route('admin.brands');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-brand-component')->layout('layouts.base');
    }
}
