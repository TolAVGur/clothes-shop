<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
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
            'ADM',
            'MDR',
            'USR',
        ];

        collect($roles)->each(function ($role) {
            $role = Role::findOrCreate($role);
        });
    }
}
