<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="{{ route('conferences.index') }}">
            {{ __('messages.conferences') }}
        </a>

        <div class="navbar-nav ms-auto align-items-center">
            @auth
                <a class="nav-link" href="{{ route('conferences.create') }}">
                    {{ __('messages.create_conference') }}
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm ms-2">
                        {{ __('messages.logout') }}
                    </button>
                </form>
            @else
                <a class="btn btn-outline-light btn-sm" href="{{ route('login') }}">
                    {{ __('messages.login') }}
                </a>
            @endauth
        </div>
    </div>
</nav>

<main class="container py-5">
    @yield('content')
</main>
</body>
</html>
