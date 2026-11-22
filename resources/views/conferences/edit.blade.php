@extends('layouts.app')

@section('title', __('messages.edit'))

@section('content')
    <h1>{{ __('messages.edit') }}</h1>

    <form action="{{ route('conferences.update', $conference) }}" method="POST">
        @csrf
        @method('PUT')

        @include('conferences.partials.form')

        <button type="submit">{{ __('messages.save') }}</button>
    </form>
@endsection
