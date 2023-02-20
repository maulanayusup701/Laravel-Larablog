<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Post::factory(100)->create();
        User::create([
            'name' => 'Maulana Yusup',
            'username' => 'aoifutaba701',
            'email' => 'aoifutaba701@gmail.com',
            'password' => Hash::make('12345')
        ]);
        Category::create([
            'name' => 'Japan',
            'slug' => 'japan',
        ]);
        Category::create([
            'name' => 'Japanese Language Proficiency Test',
            'slug' => 'jlpt',
        ]);
        Category::create([
            'name' => 'Hanashi',
            'slug' => 'hanashi',
        ]);
    }
}
