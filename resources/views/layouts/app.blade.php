<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <a href="{{ route('conferences.index') }}">{{ __('messages.conferences') }}</a>

    @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">{{ __('messages.logout') }}</button>
        </form>
    @else
        <a href="{{ route('login') }}">{{ __('messages.login') }}</a>
    @endauth
</header>

<main>
    @yield('content')
</main>
</body>
</html>
