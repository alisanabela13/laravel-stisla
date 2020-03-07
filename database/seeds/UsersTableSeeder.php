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
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123'),
            'role_id' => 1
        ]);
 
        App\User::create([
            'name' => 'Mr. Jenkin',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123123'),
            'role_id' => 2
        ]);
 
       
    }
}
