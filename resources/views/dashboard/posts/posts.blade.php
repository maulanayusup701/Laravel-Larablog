@extends('dashboard.layouts.main')
@section('container')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <h3 class="mt-4 mb-5">
        Larablog | My Posts
    </h3>
    <div class="page-content">
        <div class="col">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @foreach ($post as $post)
                <div class="card mb-3">
                    <div class="row">
                        {{-- <div class="col-1">
                            <img src="https://source.unsplash.com/random/195x140?{{ $post->category->name }}">
                        </div> --}}
                        <div class="col">
                            <div class="card-body">
                                <a href="/posts/{{ $post->slug }}">
                                    <h3 class="card-title">{{ $post->title }}</h3>
                                </a>
                                <p class="card-text">{{ $post->excerpt }}{{ $post->created_at->diffForHumans() }}
                                    <span class="badge bg-primary">{{ $post->category->name }}</span>
                                </p>
                                <div>
                                    <a href="/dashboard/posts/{{ $post->slug }}/edit"><span class="badge bg-warning"><i
                                                class="bi bi-pencil-square"></i></span></a>
                                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                            <i class="bi bi-x-octagon-fill"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
