@extends('layouts.main')
@section('container')
<article class="mt-5">
    <h2 class="mb-5">{{$post->title}}</h2>
    <h5>by: Maulana Yusup in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></h5>
    {!!$post->content!!}
</article>
    <a href="/posts">back to post</a>
@endsection