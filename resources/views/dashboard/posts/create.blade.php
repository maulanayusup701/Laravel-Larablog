@extends('dashboard.layouts.main')
@section('container')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <h3 class="mt-4 mb-5">
        Larablog | Create Post
    </h3>
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="/dashboard/posts" method="post">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Title</label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" id="title"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        placeholder="Title" value="{{ old('title') }}">
                                </div>
                                <div class="invalid-feedback">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Slug</label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" id="slug"
                                        class="form-control @error('slug') is-invalid @enderror" name="slug"
                                        placeholder="slug">
                                </div>
                                @error('slug')
                                    {{ $message }}
                                @enderror
                                <div class="col-md-12">
                                    <label>Category</label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <select class="form-select @error('category_id') is-invalid @enderror"
                                        name="category_id" id="category_id" value="{{ old('category_id') }}">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
                                    {{ $message }}
                                @enderror
                                <div class="col-md-12">
                                    <label>Body</label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input id="content" type="hidden" name="content">
                                    <trix-editor input="content" value="{{ old('content') }}"></trix-editor>
                                </div>
                                @error('content')
                                    {{ $message }}
                                @enderror
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        Create Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
