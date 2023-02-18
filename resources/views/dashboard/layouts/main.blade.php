@include('dashboard.partials.meta')

<body>
    <script src="js/initTheme.js"></script>
    <div id="app">
        @include('dashboard.partials.sidebar')

        {{-- content --}}
        <div id="main">
            @yield('container')
            @include('dashboard.partials.footer')
        </div>
        {{-- end-content --}}
    </div>
