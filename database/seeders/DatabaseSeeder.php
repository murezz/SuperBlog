<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        User::create([
            'name' => 'Muhammad Reza Aditya',
            'username' => 'Murezz',
            'jobs' => 'Web Developer',
            'photo' => 'default.png',
            'email' => 'reza@gmail.com',
            'password' => bcrypt('rejakartans')
        ]);

        User::create([
            'name' => 'Rendi Fadillah',
            'username' => 'Rendiii',
            'jobs' => 'Staff IT',
            'photo' => 'default.png',
            'email' => 'rendi@gmail.com',
            'password' => bcrypt('rendiganteng')
        ]);

        User::create([
            'name' => 'Muhammad Taufan',
            'username' => 'opanipin',
            'jobs' => 'influencer',
            'photo' => 'default.png',
            'email' => 'opan@gmail.com',
            'password' => bcrypt('opanipin')
        ]);

        Post::factory(20)->create();
    }
}
