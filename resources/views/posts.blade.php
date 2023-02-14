@extends('layouts.main')
@section('container')
    <h1>{{ $title }}</h1>
    <hr>

    @if ($posts->count() > 0)
        <article>
            <div class="card mb-3">
                <img src="https://source.unsplash.com/random/1200x400?{{ $posts[0]->category->name[0] }}"
                    style="widht:1200x400" class="card-img-top" alt="{{ $posts[0]->category->name[0] }}">
                <div class="card-body text-center">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        <h3 class="card-title">{{ $posts[0]->title }}</h3>
                    </a>
                    <small class="text-muted">
                        <p>by, <a
                                href="/authors/{{ $posts[0]->author->username }}"style="text-decoration:none;">{{ $posts[0]->author->name }}</a>
                            in <a href="/categories/{{ $posts[0]->category->slug }}"
                                style="text-decoration:none;">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </p>
                    </small>

                    <p class="card-text">{{ $posts[0]->excerpt }}</p>

                    <a href="/posts/{{ $posts[0]->slug }}" style="text-decoration:none;" class="btn btn-primary">Read
                        more</a>
                </div>
            </div>
        </article>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none
                                text-white">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/random/500x400?{{ $post->category->name }}"
                            class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                                <small class="text-muted">
                                    <p>by, <a
                                            href="/authors/{{ $post->author->username }}"style="text-decoration:none;">{{ $post->author->name }}</a>
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
@endsection
