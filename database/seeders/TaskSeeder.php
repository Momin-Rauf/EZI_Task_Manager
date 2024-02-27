<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            
            [
                'title'=>'Assignment',
                'description'=>'admin@gmail.com',
                'status' => 'Todo',

            ],
           

        ];

        // Insert data into the doctors table
        DB::table('tasks')->insert($tasks);   //
    }
}
