<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminAddRoleComponent extends Component
{

    

    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.admin.admin-add-role-component', [
            'permissions' => $permissions,
        ])->layout('layouts.base');
    }
}
