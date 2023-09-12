<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Sakti',
            'username' => 'sakti',
            'email' => 'sakti@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design  '
        ]);

        Post::factory(30)->create();
    }
}
