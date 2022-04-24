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

    public function render()
    {

        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
