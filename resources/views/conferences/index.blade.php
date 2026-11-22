
@extends('layouts.app')

@section('title', __('messages.conferences'))

@section('content')
    <h1>{{ __('messages.conferences') }}</h1>

    @auth
        <a href="{{ route('conferences.create') }}">
            {{ __('messages.create_conference') }}
        </a>
    @endauth

    @foreach ($conferences as $conference)
        <div>
            <h2>{{ $conference->title }}</h2>
            <p>{{ $conference->date }}</p>
            <p>{{ $conference->address }}</p>

            <a href="{{ route('conferences.show', $conference) }}">
                {{ __('messages.view') }}
            </a>

            @auth
                <a href="{{ route('conferences.edit', $conference) }}">
                    {{ __('messages.edit') }}
                </a>

                <form action="{{ route('conferences.destroy', $conference) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        {{ __('messages.delete') }}
                    </button>
                </form>
            @endauth
        </div>
    @endforeach
@endsection
