<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class AdminRoleComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(5);
        //$permissions = Permission::all();
        //$rolePermissions = Permission::join('role_has_permissions', 'role_has_permissions.permission_id', '=', 'permissions.id');
        return view('livewire.admin.admin-role-component', [
            'roles' => $roles,
            //'permissions' => $permissions,
            //'rolePermissions' => $rolePermissions
        ])->layout('layouts.base');
    }
}
