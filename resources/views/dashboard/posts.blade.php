@extends('dashboard.layouts.main')

@section('container')
    <h3 class="mt-4 mb-5">
        Larablog | Posts
    </h3>
    <div class="page-content">
        <section class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>My Posts</h3>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-success"><i class="bi bi-plus-circle-fill"></i> Add Post</button>
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
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-warning me-2 mb-2">
                                                                Edit
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-danger mb-2">
                                                                Delete
                                                            </button>
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
