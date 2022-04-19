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

        User::create([
            'name' => 'Ardian',
            'username' => 'ardian.fm',
            'email' => 'ardianfirmansyah123@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(4)->create();
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);
        Post::factory(40)->create();
    }
}