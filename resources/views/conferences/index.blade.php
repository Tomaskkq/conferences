@extends('layouts.app')

@section('title', __('messages.conferences'))

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">{{ __('messages.conferences') }}</h1>

        @auth
            <a href="{{ route('conferences.create') }}" class="btn btn-primary">
                {{ __('messages.create_conference') }}
            </a>
        @endauth
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
            <tr>
                <th>{{ __('messages.title') }}</th>
                <th>{{ __('messages.date') }}</th>
                <th>{{ __('messages.address') }}</th>
                <th class="text-end">{{ __('messages.actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($conferences as $conference)
                <tr>
                    <td class="fw-semibold">{{ $conference->title }}</td>
                    <td>{{ $conference->date }}</td>
                    <td>{{ $conference->address }}</td>
                    <td>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('conferences.show', $conference) }}"
                               class="btn btn-sm btn-outline-primary">
                                {{ __('messages.view') }}
                            </a>

                            @auth
                                <a href="{{ route('conferences.edit', $conference) }}"
                                   class="btn btn-sm btn-outline-warning">
                                    {{ __('messages.edit') }}
                                </a>

                                <form action="{{ route('conferences.destroy', $conference) }}"
                                      method="POST"
                                      class="delete-form"
                                      data-title="{{ __('messages.confirm_delete') }}"
                                      data-confirm="{{ __('messages.confirm') }}"
                                      data-cancel="{{ __('messages.cancel') }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        {{ __('messages.delete') }}
                                    </button>
                                </form>
                            @endauth
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
