@extends('dashboard.layouts.main')

@section('container')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <h3 class="mt-4 mb-5">
        Larablog | Dashboard
    </h3>
    <div class="page-content">
        <section class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body py-4-5 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="images/faces/1.jpg" alt="Face 1" />
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">{{ auth()->user()->name }}</h5>
                                        <h6 class="text-muted mb-0">{{ '@' . auth()->user()->username }}</h6>
                                        <button type="button" class="btn btn-outline-primary block mt-3 ">
                                            Edit Profile
                                        </button>
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
