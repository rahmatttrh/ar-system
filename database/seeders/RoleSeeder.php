<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
        DB::table('roles')->insert([
            ['name' => 'Superuser', 'guard_name' => 'web'],
            ['name' => 'Account Receivable', 'guard_name' => 'web'],
            ['name' => 'General Manager', 'guard_name' => 'web'],
            ['name' => 'Direksi', 'guard_name' => 'web'],
            ['name' => 'Pajak', 'guard_name' => 'web'],
        ]);
    }
}
