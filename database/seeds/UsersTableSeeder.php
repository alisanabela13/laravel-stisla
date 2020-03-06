<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Mr. Junk',
            'email' => 'junk@gmail.com',
            'password' => bcrypt('123123'),
            'role_id' => 1
        ]);
 
        App\User::create([
            'name' => 'Mr. Jenkin',
            'email' => 'jenkin@gmail.com',
            'password' => bcrypt('123123'),
            'role_id' => 2
        ]);
 
        App\User::create([
            'name' => 'Miss. Puff',
            'email' => 'puff@gmail.com',
            'password' => bcrypt('123123'),
            'role_id' => 3
        ]);
    }
}
