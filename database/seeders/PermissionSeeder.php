<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            'user edit',
            'role look',
            'role add',
            'role edit',
            'role delete',
            'category look',
            'category add',
            'category edit',
            'category delete',
            'brand look',
            'brand add',
            'brand edit',
            'brand delete',
            'product look',
            'product add',
            'product edit',
            'product delete',
        ];

        collect($permission)->each(function ($permission) {
            $permission = Permission::findOrCreate($permission);
        });
    }
}
