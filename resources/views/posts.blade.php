@extends('layouts.main')
@section('container')
    <h1>Halaman Post</h1>
    <hr>
    @foreach ($posts as $post)
        <article class="mt-2" id='post'>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"> <a href="/posts/{{ $post->slug }}"
                            style="text-decoration: none;">{{ $post->title }}</a></h3>
                    <h6 class="card-subtitle mb-2 text-muted">
                        by, {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}"
                            style="text-decoration: none;">{{ $post->category->name }}</a>
                    </h6>
                    <p class="card-text"> {!! $post->excerpt !!}</p>
                    <a href="/posts/{{ $post->slug }}">Read more...</a>
                </div>
            </div>
        </article>
    @endforeach
@endsection
