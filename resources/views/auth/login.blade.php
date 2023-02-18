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
    <title>Login | Larablog</title>
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
                            placeholder="Username" required>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
