{{-- @dd($categories); --}}
@extends('layouts.main')
@section('container')
<h1 class="mb-5">Post Categores</h1>
    @foreach ($categories as $category)
    <article class="mt-5">
        <ul>
            <li>
                <h4><a href="/categories/{{$category->slug}}">{{$category->name}}</a></h4>
            </li>
        </ul>
    @endforeach
@endsection