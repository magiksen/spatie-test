<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Role::create(['name' => 'superAdmin']);
        $Admin = Role::create(['name' => 'Admin']);
        $usuario = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'usuarios.index'])->syncRoles([$superAdmin]);
        Permission::create(['name' => 'usuarios.create'])->syncRoles([$superAdmin]);
        Permission::create(['name' => 'usuarios.store'])->syncRoles([$superAdmin]);
        Permission::create(['name' => 'usuarios.show'])->syncRoles([$superAdmin]);
        Permission::create(['name' => 'usuarios.edit'])->syncRoles([$superAdmin]);
        Permission::create(['name' => 'usuarios.update'])->syncRoles([$superAdmin]);
        Permission::create(['name' => 'usuarios.destroy'])->syncRoles([$superAdmin]);
    }
}
