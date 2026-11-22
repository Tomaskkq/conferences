@extends('layouts.app')

@section('title', __('messages.create_conference'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="bg-white p-4">
                <h1 class="h3 mb-4">{{ __('messages.create_conference') }}</h1>

                <form action="{{ route('conferences.store') }}" method="POST">
                    @csrf

                    @include('conferences.partials.form')

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="{{ route('conferences.index') }}" class="btn btn-outline-secondary">
                            {{ __('messages.cancel') }}
                        </a>

                        <button type="submit" class="btn btn-primary">
                            {{ __('messages.save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
