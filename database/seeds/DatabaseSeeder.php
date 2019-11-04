<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Anna',
            'email' => 'Anna@gmail.com',
            'password' => bcrypt('anna'),
            'is_admin' => true,
        ]);
    }
}
