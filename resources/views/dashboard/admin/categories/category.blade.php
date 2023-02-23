@extends('dashboard.layouts.main')
@section('container')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <h3 class="mt-4 mb-5">
        Larablog | Post Categories
    </h3>
    <div class="d-inline">
        <a href="/dashboard/categories/create" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i> Add Category</a>
    </div>
    <div class="page-content mt-4">
        <section class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="row" id="basic-table">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-lg">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Category</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($category as $category)
                                                            <tr>
                                                                <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                                <td class="text-bold-500">{{ $category->name }}</td>
                                                                <td class="text-bold-500">
                                                                    <a
                                                                        href="/dashboard/categories/{{ $category->slug }}/edit">
                                                                        <span class="badge bg-warning">
                                                                            <i class="bi bi-pencil-square"></i>
                                                                        </span>
                                                                    </a>
                                                                    <form
                                                                        action="/dashboard/categories/{{ $category->slug }}"
                                                                        method="post" class="d-inline">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button class="badge bg-danger border-0"
                                                                            onclick="return confirm('Are you sure?')">
                                                                            <i class="bi bi-x-octagon-fill"></i></span>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
