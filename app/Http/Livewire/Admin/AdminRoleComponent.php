<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

use DB;

class AdminRoleComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(5);
       
        return view('livewire.admin.admin-role-component', [
            'roles' => $roles,
        ])->layout('layouts.base');
    }
}
