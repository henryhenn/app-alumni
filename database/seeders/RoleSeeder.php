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
    public function run()
    {
        Role::create([
            'guard_name' => 'web',
            'name' => 'User'
        ]);

        Role::create([
            'guard_name' => 'web',
            'name' => 'Admin'
        ]);

        Role::create([
            'guard_name' => 'web',
            'name' => 'Super Admin'
        ]);
    }
}
