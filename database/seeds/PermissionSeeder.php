<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['permission_name' => 'setting-web', 'permission_label' => 'Setting Web'],
            ['permission_name' => 'manager-user', 'permission_label' => 'Manager User'],
            ['permission_name' => 'manager-role', 'permission_label' => 'Manager Role'],

            ['permission_name' => 'view-category', 'permission_label' => 'View Category'],
            ['permission_name' => 'create-category', 'permission_label' => 'Create Category'],
            ['permission_name' => 'update-category', 'permission_label' => 'Update Category'],
            ['permission_name' => 'show-category', 'permission_label' => 'Show Category'],
            ['permission_name' => 'delete-category', 'permission_label' => 'Delete Category'],

            ['permission_name' => 'view-brand', 'permission_label' => 'View Brand'],
            ['permission_name' => 'create-brand', 'permission_label' => 'Create Brand'],
            ['permission_name' => 'update-brand', 'permission_label' => 'Update Brand'],
            ['permission_name' => 'show-brand', 'permission_label' => 'Show Brand'],
            ['permission_name' => 'delete-brand', 'permission_label' => 'Delete Brand'],

            ['permission_name' => 'view-product', 'permission_label' => 'View Product'],
            ['permission_name' => 'create-product', 'permission_label' => 'Create Product'],
            ['permission_name' => 'update-product', 'permission_label' => 'Update Product'],
            ['permission_name' => 'show-product', 'permission_label' => 'Show Product'],
            ['permission_name' => 'delete-product', 'permission_label' => 'Delete Product']
        ]);
    }
}
