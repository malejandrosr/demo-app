@props(['label'])

<label
    {{
        $attributes->merge([
            'class' => 'block text-sm font-medium mb-2'
        ])
    }}
>
    {{ $label ?? $slot }}
</label>
