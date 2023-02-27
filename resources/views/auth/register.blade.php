@extends('auth.layouts.main')
@section('container')

    <body>
        <div id="auth">
            <div class="row h-100 justify-content-center">
                <div id="auth-left" class="col-md-5">
                    {{-- <div class="auth-logo">
                    <a href="#"><img src="images/logo/logo.svg" alt="Logo"></a>
                </div> --}}
                    <h1 class="auth-title">Sign Up.</h1>
                    <p class="auth-subtitle mb-5">
                        Input your data to register to our website.
                    </p>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="form-control form-control-xl @error('name') is-invalid @enderror"
                                placeholder="Full Name" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                class="form-control form-control-xl @error('username') is-invalid @enderror"
                                placeholder="Username" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="email" id="email" value="{{ old('email') }}"
                                class="form-control form-control-xl @error('email') is-invalid @enderror"
                                placeholder="Email" required>
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" id="password"
                                class="form-control form-control-xl @error('password') is-invalid @enderror"
                                placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">
                            Sign Up
                        </button>
                    </form>
                    <div class="text-center mt-3 text-lg fs-4">
                        <p class="text-gray-600">
                            Already have an account?
                            <a href="/login" class="font-bold">Log in</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
