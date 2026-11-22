@extends('layouts.app')

@section('title', __('messages.login'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="bg-white p-4">
                <h1 class="h3 text-center mb-4">{{ __('messages.login') }}</h1>

                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">
                            {{ __('messages.email') }}
                        </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">
                            {{ __('messages.password') }}
                        </label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('messages.login') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
