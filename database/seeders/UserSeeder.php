<?php

namespace Database\Seeders;

use App\Models\User;
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
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin');

        $consumer = User::create([
            'name' => 'consumer',
            'email' => 'consumer@consumer.com',
            'password' => bcrypt('consumer123'),
        ]);
        $consumer->assignRole('consumer');

        $videocreator = User::create([
            'name' => 'videocreator',
            'email' => 'videocreator@videocreator.com',
            'password' => bcrypt('videocreator123'),
        ]);
        $videocreator->assignRole('video-creator');
    }
}
