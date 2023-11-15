@props(['disabled' => false, 'has-error' => false])

<input
    type="email"
    autocomplete="off"
    {{
        $attributes->merge([
            'class' => 'py-3 px-4 block w-full rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none ' . ($hasError ? 'border-red-300 focus:border-red-500 focus:ring-red-500' : 'border-gray-300 focus:border-blue-500 focus:ring-blue-500')
        ])
    }}
    @if($disabled) disabled @endif
>
