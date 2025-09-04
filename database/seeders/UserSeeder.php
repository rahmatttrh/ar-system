<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Superuser',
            'username' => 'superuser',
            'email' => 'superuser@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 1,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);

        // $admin = User::where('username', 'superuser')->first();
        // $admin->assignRole('superuser');
    }
}
