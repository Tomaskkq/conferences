
<div>
    <label>{{ __('messages.title') }}</label>
    <input type="text" name="title" value="{{ old('title', optional($conference ?? null)->title) }}">
    @error('title')
    <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label>{{ __('messages.description') }}</label>
    <textarea name="description">{{ old('description', optional($conference ?? null)->description) }}</textarea>
    @error('description')
    <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label>{{ __('messages.date') }}</label>
    <input type="date" name="date" value="{{ old('date', optional($conference ?? null)->date) }}">
    @error('date')
    <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label>{{ __('messages.address') }}</label>
    <input type="text" name="address" value="{{ old('address', optional($conference ?? null)->address) }}">
    @error('address')
    <p>{{ $message }}</p>
    @enderror
</div>
