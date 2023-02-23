@extends('dahboard.layout.main')
@section('container')
    @extends('dashboard.layouts.main')
@section('container')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <h3 class="mt-4 mb-5">
        Larablog | Edit Post
    </h3>
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="/dashboard/posts/{{ $post->slug }}" method="post"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" id="title"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        placeholder="Category" value="{{ old('name', $category->name) }}">
                                    <div class="invalid-feedback">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Slug</label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" id="slug"
                                        class="form-control @error('slug') is-invalid @enderror" name="slug"
                                        placeholder="slug" value="{{ old('slug', $category->slug) }}">
                                    <div class="invalid-feedback">
                                        @error('slug')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        Update Category
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
