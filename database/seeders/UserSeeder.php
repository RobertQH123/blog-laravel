<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin User';
        $user->email = 'admin@gmai.com';
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = 'robert';
        $user->email = 'robert@gmai.com';
        $user->password = bcrypt('admin123');
        $user->save();

        User::factory(10)->create();
    }
}
