<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(3)->create();
        // User::create([
        //     'name' => 'Maulana Yusup',
        //     'email' => 'maulana.yusup8989@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Yana',
        //     'email' => 'aoifutaba701@gmai.com',
        //     'password' => bcrypt('12345')
        // ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'test1',
        //     'slug' => 'Test1',
        //     'excerpt' => 'lorem ipsum dolor sit amet.',
        //     'content' => 'lorem ipsum dolor sit amet.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'test2',
        //     'slug' => 'Test2',
        //     'excerpt' => 'lorem ipsum dolor sit amet.',
        //     'content' => 'lorem ipsum dolor sit amet.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'test3',
        //     'slug' => 'Test3',
        //     'excerpt' => 'lorem ipsum dolor sit amet.',
        //     'content' => 'lorem ipsum dolor sit amet.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Nihon',
            'slug' => 'nihon',
        ]);
    }
}
