<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardPostsController extends Controller
{
    public function index()
    {
        return view('dashboard.posts.posts', [
            'title' => 'My Post',
            'post' => Post::latest()->where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Create Post',
            'categories' => Category::orderBy('name', 'asc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:200',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'content' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['excerpt'] = Str::limit(strip_tags($request->content), 200);
        $data = Post::create($data);
        return redirect('/dashboard/posts')->with('success', 'create post successfuly');
    }

    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' => $post->title,
            'post' => $post
        ]);
    }

    public function edit(Post $post)
    {
        return view('dashboard/posts/edit', [
            'title' => 'Edit Post',
            'post' => $post,
            'categories' => Category::orderBy('name', 'asc')->get()
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:200',
            'category_id' => 'required',
            'content' => 'required',
        ];
        if ($request != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $data = $request->validate($rules);
        $data['user_id'] = auth()->user()->id;
        $data['excerpt'] = Str::limit(strip_tags($request->content), 200);
        Post::where('id', $post->id)->update($data);
        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    public function destroy(Post $post)
    {
        $data = Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }
}
