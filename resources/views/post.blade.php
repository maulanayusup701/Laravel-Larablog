@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>by, <a
                        href="/posts?author={{ $post->author->username }}"style="text-decoration:none;">{{ $post->author->name }}</a>
                    in <a href="/posts?category={{ $post->category->slug }}"
                        style="text-decoration:none;">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}
                </p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden; ">
                        <img src="{{ asset('storage/' . $post->image) }}" style="widht:1200x400" class="card-img-top"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}"
                        style="widht:1200x400" class="card-img-top" alt="{{ $post->category->name }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->content !!}
                </article>

                <a href="/posts" class="d-block mt-3">Back to post</a>
            </div>
        </div>
    </div>
@endsection
