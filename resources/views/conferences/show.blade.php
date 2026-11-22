@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8">
            <div class="bg-white p-4">
                <h1 class="h3 mb-4">{{ $conference->title }}</h1>

                <div class="mb-3">
                    <div class="text-secondary small">{{ __('messages.description') }}</div>
                    <p class="mb-0">{{ $conference->description }}</p>
                </div>

                <div class="mb-3">
                    <div class="text-secondary small">{{ __('messages.date') }}</div>
                    <p class="mb-0">{{ $conference->date }}</p>
                </div>

                <div class="mb-4">
                    <div class="text-secondary small">{{ __('messages.address') }}</div>
                    <p class="mb-0">{{ $conference->address }}</p>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('conferences.index') }}"
                       class="btn btn-outline-secondary">
                        {{ __('messages.back') }}
                    </a>

                    @auth
                        <a href="{{ route('conferences.edit', $conference) }}"
                           class="btn btn-primary">
                            {{ __('messages.edit') }}
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
