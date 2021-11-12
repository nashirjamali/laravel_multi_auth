<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        // User admin
        $admin = User::create([
            'name' => 'Admin Toko',
            'email' => 'admin@mail.id',
            'password' => Hash::make('rahasia')
        ]);

        $admin->assignRole('admin');

        // User penjual
        $penjual = User::create([
            'name' => 'Pak Eri',
            'email' => 'eri@mail.id',
            'password' => Hash::make('rahasia')
        ]);

        $penjual->assignRole('penjual');

        // User pembeli
        $pembeli = User::create([
            'name' => 'Andi',
            'email' => 'andi@mail.id',
            'password' => Hash::make('rahasia')
        ]);

        $pembeli->assignRole('pembeli');
    }
}
