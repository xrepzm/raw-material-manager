<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="manifest" href="/mix-manifest.json">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
    ]) !!};
  </script>
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-toggleable-md navbar-light sticky-top bg-faded mb-4">
      {{-- <div class="container"> --}}

        <button class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#app-navbar-collapse"
          aria-controls="app-navbar-collapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav mr-auto">&nbsp;</ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav justify-content-end">
            <!-- Authentication Links -->
            @if (Auth::guest())
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
            @else
              <li class="nav-item dropdown">
                <a href="#"
                  class="nav-link dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  {{ Auth::user()->name }}
                </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                  </li>
                </ul>
              </li>
            @endif
          </ul>
        </div>
      {{-- </div> --}}
    </nav>

    @yield('content')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
