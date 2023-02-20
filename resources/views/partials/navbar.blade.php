<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Larablog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ Request::is('/about') ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ Request::is('/posts') ? 'active' : '' }}" href="/posts">Posts</a>
                <a class="nav-link {{ Request::is('/categories') ? 'active' : '' }}" href="/categories">Categories</a>
            </div>

            <div class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Wellcome Back! {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login">Login</a>
                    <a class="nav-link {{ $active === 'register' ? 'active' : '' }}" href="/register">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
