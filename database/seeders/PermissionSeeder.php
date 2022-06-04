<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function run()
    {
        //
    }*/

    public function run(): void
    {
        //Some initially role configuration
        $roles = [
            'ADM' => [
                'users view',
                'users create',
                'users update',
                'users delete',
                'products view',
                'products create',
                'products update',
                'products delete',
                'categories view',
                'categories create',
                'categories update',
                'categories delete',
                'brands view',
                'brands create',
                'brands update',
                'brands delete',
            ],
            'MDR' => [
                'categories view',
                'categories create',
                'categories update',
                'brands view',
                'brands create',
                'brands update',
                'products view',
                'products create',
                'products update',
            ],
            /*'USR' => [
                'products view'
            ]*/
        ];

        collect($roles)->each(function ($permissions, $role) {
            $role = Role::findOrCreate($role);
            collect($permissions)->each(function ($permission) use ($role) {
                $role->permissions()->save(Permission::findOrCreate($permission));
            });
        });
    }
}
