<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserRoleEdit extends Component
{
    public $role_name;
    public $user_name;
    public $role_id;

    public function mount($user_id)
    {
        $user = User::where('id', $user_id)->first();
        $this->user_id = $user->id;
        $this->user_name = $user->name;
        $this->role_name = $user->role_name;
    }

    public function update_user_role()
    {
        $role = Role::where('id', $this->role_id)->first();
        $user = User::find($this->user_id);
        $user->role_name = $role->name;
        $user->save();
        //session()->flash('message', 'Змінена роль користувача!');
        return redirect()->route('admin.users');
    }

    public function render()
    {
        $roles = Role::get();
        return view('livewire.admin.admin-user-role-edit', [
            'roles' => $roles
        ])->layout('layouts.base');
    }
}
