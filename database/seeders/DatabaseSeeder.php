<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

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
        // User::create([
        //     'name' => 'Ardian',
        //     'email' => 'arxd@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Firmansyah',
        //     'email' => 'firman@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        // Category::create([
        //     'name' => 'Berita',
        //     'slug' => 'berita'
        // ]);
        // Category::create([
        //     'name' => 'Teknologi',
        //     'slug' => 'teknologi'
        // ]);
        Post::factory(20)->create();


    }
}