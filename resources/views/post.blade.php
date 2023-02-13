@extends('layouts.main')
@section('container')
<article class="mt-5">
    <h2>{{$post->title}}</h2>
    {{-- <h5>by: {{$post->}}</h5> --}}
    {!!$post->content!!}
</article>
    <a href="/posts">back to post</a>
@endsection