<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin123'); // You may want to use a more secure method to generate passwords // Assuming you have a boolean field to identify admins
        $admin->save();
        
        $user = new User();
        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('user123'); // You may want to use a more secure method to generate passwords// Assuming you have a boolean field to identify admins
        $user->save();

    }
}
