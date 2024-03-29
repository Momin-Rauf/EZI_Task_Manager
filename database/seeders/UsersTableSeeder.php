<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example data for seeding
        $user = [
            
            [
                'name'=>'Ali',
                'email'=>'admin@gmail.com',
                'password' =>Hash::make('pass123'),
                'role' => 'admin',

            ],
            [
                'name'=>'Momin',
                'email'=>'admin@gmail.com',
                'password' =>Hash::make('pass123'),
                'role' => 'User',
            ],
            [
                'name'=>'Taha',
                'email'=>'taha@gmail.com',
                'password' =>Hash::make('pass123'),
                'role' => 'Manager',
            ],

        ];

        // Insert data into the doctors table
        DB::table('users')->insert($user);
    }
}
            //admin 
            