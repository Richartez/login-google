@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
        'class' =>
            'w-full rounded-lg border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 px-4 py-3'
    ]) !!}
/>
