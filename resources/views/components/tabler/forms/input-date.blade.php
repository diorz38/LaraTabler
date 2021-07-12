@props(['options' => [], 'label'])

@php
    $options = array_merge([
                'locale' => 'id',
                'dateFormat' => 'Y-m-d',
                'enableTime' => false,
                'altFormat' =>  'j F Y',
                'altInput' => true
                ], $options);
@endphp

<div wire:ignore class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <input
        x-data="{value: @entangle($attributes->wire('model')), instance: undefined}"
        x-init="() => {
                $watch('value', value => instance.setDate(value, true));
                instance = flatpickr($refs.input, {{ json_encode((object)$options) }});
            }"
        x-ref="input"
        x-bind:value="value"
        type="text"
        {{ $attributes->merge(['class' => 'form-control']) }}
    />
</div>

@once
    @push('before-styles')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	@endpush

    @push('before-scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>
	@endpush

@endonce

