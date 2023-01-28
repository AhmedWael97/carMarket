<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'password' => '123456789',
            'email' => 'admin@admin.com',
        ]);

        \App\Models\Settings::create([
            'site_name' => 'Site Name',
            'site_logo' => '1674751027car.png',
            'site_fav_icon' => '1674751027car.png',
            'section_one_img' => '1674751027bg-8.jpg',
        ]);


        $super_admin = Role::create(['name'=>'Super Admin']);

        Permission::create(['name' => 'Role View']);
        Permission::create(['name' => 'Role Create']);
        Permission::create(['name' => 'Role Edit']);
        Permission::create(['name' => 'Role Delete']);

        Permission::create(['name' => 'Make View']);
        Permission::create(['name' => 'Make Create']);
        Permission::create(['name' => 'Make Edit']);
        Permission::create(['name' => 'Make Delete']);

        Permission::create(['name' => 'Model View']);
        Permission::create(['name' => 'Model Create']);
        Permission::create(['name' => 'Model Edit']);
        Permission::create(['name' => 'Model Delete']);

        Permission::create(['name' => 'Cars View']);
        Permission::create(['name' => 'Cars Create']);
        Permission::create(['name' => 'Cars Edit']);
        Permission::create(['name' => 'Cars Delete']);

        Permission::create(['name' => 'Settings View']);
        Permission::create(['name' => 'Settings Create']);
        Permission::create(['name' => 'Settings Edit']);
        Permission::create(['name' => 'Settings Delete']);

        Permission::create(['name' => 'Users View']);
        Permission::create(['name' => 'Users Create']);
        Permission::create(['name' => 'Users Edit']);
        Permission::create(['name' => 'Users Delete']);

        Permission::create(['name' => 'Order View']);
        Permission::create(['name' => 'Order Create']);
        Permission::create(['name' => 'Order Edit']);
        Permission::create(['name' => 'Order Delete']);

        $permissions = Permission::get();
        $super_admin->syncPermissions($permissions);

        $user->assignRole('Super Admin');
    }
}
