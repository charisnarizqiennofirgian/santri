<?php

namespace Database\Seeders;

use App\Models\IdentitasSantri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        $user2 = User::create([
            'name' => 'Nama Santri',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        $role = Role::create(['name' => 'Admin']);
        // $permissions = Permission::pluck('id', 'id')->all();
        // $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        $role2 = Role::create(['name' => 'User']);
        $user2->assignRole([$role2->id]);

        IdentitasSantri::create([
            'user_id' => $user2->id,
            'nama_lengkap' => $user2->name,
        ]);
    }
}
