<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Samuel Escobar',
           'email' => 'elemejore@gmail.com',
           'password' => bcrypt('admin1234')
        ])->assignRole('superAdmin');

        User::create([
            'name' => 'Admin 1',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin1234')
        ]);

        User::create([
            'name' => 'Usuario 1',
            'email' => 'usuario@usuario.com',
            'password' => bcrypt('admin1234')
        ]);
    }
}
