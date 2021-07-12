@props([
    'label' => '',
    'error' => false,
    'loading' => false,
])

<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <div @if($loading) class="input-icon mb-3" @endif>
        <input {{ $attributes->merge(['class' => 'form-control']) }} autocomplete="off">
        @if($loading)
        <span {{ $loading }} class="input-icon-addon mr-0 mt-1">
            <div class="spinner-border spinner-border-sm text-muted" role="status"></div>
        </span>
        @endif
        @if($error)
        <div class="invalid-feedback">{{ $error }}</div>
        @endif
    </div>
</div>
