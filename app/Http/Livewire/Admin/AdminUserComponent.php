<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUserComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.admin-user-component', [
            'users' => $users
        ])->layout('layouts.base');
    }
}
