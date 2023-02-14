@extends('layouts.main')
@section('container')
    <article class="mt-5" id="post">
        <h2 class="mb-5">{{ $post->title }}</h2>
        <h5>by: {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}"
                style="text-decoration:
                none;">{{ $post->category->name }}</a></h5>
        {!! $post->content !!}
    </article>
    <a href="/posts"><button class="btn btn-primary mb-4"> Back to Posts</button></a>
@endsection
