<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminAddCategoryComponent extends Component
{

    /**
     * Помещает созданный ресурс в хранилище
     */

    public $name;
    public $slug;

    public function generate_slug() {
        $this->slug = Str::slug($this->name);
    }

    public function store_category() {
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message', 'Категорія "'.$this->name.'" додана успішно!');
        return redirect()->route('admin.categories');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
