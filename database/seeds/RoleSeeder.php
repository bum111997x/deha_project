<?php

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
            ['role_name' => 'system-admin', 'role_label' => 'System Admin',  'role_level' => 0, 'role_status' => 1],
            ['role_name' => 'administrator', 'role_label' => 'Administrator', 'role_level' => 1, 'role_status' => 1],
        ]);
    }
}
