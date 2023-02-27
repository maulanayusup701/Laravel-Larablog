@extends('auth.layouts.main')
@section('container')

    <body>
        <div id="auth">
            <div class="row h-100 justify-content-center">
                <div id="auth-left" class="col-md-5">
                    {{-- <div class="auth-logo">
                    <a href="#"><img src="images/logo/logo.svg" alt="Logo"></a>
                </div> --}}
                    @if (session()->has('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">
                        Log in with your data that you entered during registration.
                    </p>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" id="username"
                                class="form-control form-control-xl @error('username') is-invalid @enderror"
                                placeholder="Username" required autofocus>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" id="password"
                                class="form-control form-control-xl @error('password') is-invalid @enderror"
                                placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">
                            Log in
                        </button>
                    </form>
                    <div class="text-center mt-3 text-lg fs-4">
                        <p class="text-gray-600">
                            Don't have an account?
                            <a href="/register" class="font-bold">Sign up</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
