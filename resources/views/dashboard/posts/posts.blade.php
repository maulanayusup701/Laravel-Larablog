@extends('dashboard.layouts.main')
@section('container')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <h3 class="mt-4 mb-5">
        Larablog | Posts
    </h3>
    <div class="page-content">
        <section class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <h3>My Posts</h3>
                    </div>
                    <div class="card-body">
                        <a href="/dashboard/posts/create" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i> Add
                            Post</a>
                        <div class="row" id="basic-table">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-lg">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Category</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($post as $post)
                                                    <tr>
                                                        <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                        <td class="text-bold-500">{{ $post->title }}</td>
                                                        <td class="text-bold-500">{{ $post->category->name }}</td>
                                                        <td class="text-bold-500">
                                                            <a href="/dashboard/posts/{{ $post->slug }}"
                                                                class="badge bg-primary">
                                                                <i class="bi bi-eye-fill"></i></a>
                                                            <a href="/dashboard/posts/{{ $post->slug }}"
                                                                class="badge bg-warning">
                                                                <i class="bi bi-pencil-fill"></i>
                                                            </a>
                                                            <a href="/dashboard/posts/{{ $post->slug }}"
                                                                class="badge bg-danger">
                                                                <i class="bi bi-x-octagon-fill"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
