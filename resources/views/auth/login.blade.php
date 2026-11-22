@extends('layouts.app')

@section('title', __('messages.login'))

@section('content')
    <h1>{{ __('messages.login') }}</h1>

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <div>
            <label>{{ __('messages.email') }}</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>{{ __('messages.password') }}</label>
            <input type="password" name="password">
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">{{ __('messages.login') }}</button>
    </form>
@endsection
