<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    public function index(){
        return view('dashboard.posts',[
            'title' => 'Larablog | Posts',
            'post' => Post::where('user_id',auth()->user()->id)->get()
        ]);
    }
}
