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
        //Admin
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        // Penjual
        Role::create([
            'name' => 'penjual',
            'guard_name' => 'web'
        ]);

        // Pembeli
        Role::create([
            'name' => 'pembeli',
            'guard_name' => 'web'
        ]);
    }
}
