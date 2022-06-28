<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@superuser.com',
            'password' => Hash::make('Admin_123'),
            'role_name' => 'ADM',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
      
        // Закоментував тому-що вже зробив цю роль руками в БД
        // Як-що робити без створеной ролі в БД то розкоментувати!

        /*Role::create([
            'name' => 'ADM', // 'super-user'||'admin'||'ADM'|| ...
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);*/

        $superUser->assignRole('ADM');
    }
}
