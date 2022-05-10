<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function delete_category($id) {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Категорія видалена!');
    }

    public function render()
    {
        $categories = Category::orderBy('updated_at', 'DESC')->paginate(7);

        return view('livewire.admin.admin-category-component', ['categories' => $categories])->layout('layouts.base');
    }
}
