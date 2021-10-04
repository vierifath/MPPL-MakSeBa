<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        // Define role
        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $consumer = Role::create([
            'name' => 'consumer',
            'guard_name' => 'web',
        ]);

        $videocreator = Role::create([
            'name' => 'video-creator',
            'guard_name' => 'web',
        ]);

        $upload_video = Permission::create(['name' => 'upload video', 'guard_name' => 'web']);

        $videocreator->givePermissionTo($upload_video);
    }
}
