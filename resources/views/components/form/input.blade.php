@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />
    
    <input 
        class="w-full p-2 border border-gray-300 rounded"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes(['value' => old($name)]) }}>

    <x-form.error name="{{ $name }}" />
</x-form.field>