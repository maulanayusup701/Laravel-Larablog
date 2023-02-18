<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Larablog</title>
    <link rel="stylesheet" href="css/main/app.css" />
    <link rel="stylesheet" href="css/pages/auth.css" />
    <link rel="shortcut icon" href="images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="images/logo/favicon.png" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Larablog</title>
    <link rel="stylesheet" href="css/main/app.css">
    <link rel="stylesheet" href="css/pages/auth.css">
    <link rel="shortcut icon" href="images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="images/logo/favicon.png" type="image/png">
</head>

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
                        Log in
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
