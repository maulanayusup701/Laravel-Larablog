@extends('layouts.main')
@section('container')
    <h1 class="text-center">{{ $title }}</h1>
    <hr>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if ($posts->count() > 0)
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 500px; overflow: hidden; ">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/random/1200x400?{{ $posts[0]->category->name }}"
                    style="widht:1200x400" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                </a>
                <small class="text-muted">
                    <p>by, <a
                            href="/posts?author={{ $posts[0]->author->username }}"style="text-decoration:none;">{{ $posts[0]->author->name }}</a>
                        in <a href="/posts?category={{ $posts[0]->category->slug }}"
                            style="text-decoration:none;">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" style="text-decoration:none;" class="btn btn-primary">Read
                    more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-2 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7)">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none
                                text-white">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <div style="max-height: 800px; max-width: 1200px; overflow: hidden; ">
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                        alt="{{ $post->category->name }}">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/random/1200x800?{{ $post->category->name }}"
                                    style="widht:1200x500" class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <small class="text-muted">
                                        <p>by, <a
                                                href="/posts?author={{ $post->author->username }}"style="text-decoration:none;">{{ $post->author->name }}</a>
                                            {{ $post->created_at->diffForHumans() }}
                                        </p>
                                    </small>
                                    <p class="card-text">{{ $post->excerpt }}</p>
                                    <a href="/posts/{{ $post->slug }}" style="text-decoration:none;"
                                        class="btn btn-primary">Read
                                        more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    {{ $posts->links() }}
@endsection
