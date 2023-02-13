<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/posts',[PostController::class,'index']);

Route::get('/about', function () {
    return view('about',[
        'title' =>'About',
        'name' => 'Maulana Yusup',
        'email' => 'maulana.yusup13@wastukancana.ac.id',
        'img' => 'avatar.png'
    ]);
});

//Halaman  Single Post
Route::get('/posts/{post:slug}',[PostController::class,'show']);

//Halaman Category Post
Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Categories',
        'categories' => Category::all()
        ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
    'title' => $category->name,
    'posts' => $category->posts,
    'category' =>$category->name
    ]);

});