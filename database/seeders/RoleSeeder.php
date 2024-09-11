<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        Role::create(['name' => 'student']);
        Role::create(['name' => 'head_of_department']);
        Role::create(['name' => 'authorized_of_department']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'company_representative']);
    }
}
