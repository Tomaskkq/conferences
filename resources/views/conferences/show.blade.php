@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <h1>{{ $conference->title }}</h1>

    <p>{{ $conference->description }}</p>
    <p>{{ $conference->date }}</p>
    <p>{{ $conference->address }}</p>

    <a href="{{ route('conferences.index') }}">
        {{ __('messages.back') }}
    </a>
@endsection
