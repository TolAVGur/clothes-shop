<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminAddCategoryComponent extends Component
{

    /**
     * Помещает созданный ресурс в хранилище
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /*public function addCategory() {

        // Обработчки данных формы добавления категории:
			$request = [
                'name' => '1 name',
                'slug' => '1 slug',
			];

        Category::create($request);
        //session()->flash('success_message', 'Добавлена новая категория');

        return redirect()->route('admin.dashboard');
    }*/

    public function store(Request $request)
    {


        // Обработчки данных формы добавления категории:
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        Category::create($request->all());
        //session()->flash('success_message', 'Добавлена новая категория');

        return redirect()->route('admin.dashboard');
    }

    public function render()
    {

        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
