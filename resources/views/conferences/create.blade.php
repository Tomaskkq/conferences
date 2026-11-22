@extends('layouts.app')

@section('title', __('messages.create_conference'))

@section('content')
    <h1>{{ __('messages.create_conference') }}</h1>

    <form action="{{ route('conferences.store') }}" method="POST">
        @csrf

        @include('conferences.partials.form')

        <button type="submit">{{ __('messages.save') }}</button>
    </form>
@endsection
