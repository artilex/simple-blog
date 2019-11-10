<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Anna',
            'email' => 'Anna@gmail.com',
            'password' => bcrypt('anna'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Alex',
            'email' => 'Alex@gmail.com',
            'password' => Hash::make('alex'),
            'is_admin' => true,
        ]);
    }
}
