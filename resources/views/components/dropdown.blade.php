@props(['name', 'label' => '', 'id' => null,'value' => null])

<div>
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 mb-2">
        {{ $label }}
    </label>
    <select
        name="{{ $name }}"
        id="{{ $id }}"
        class="mt-1 block w-full rounded-md border border-gray-300 p-3">
        

    </select>
</div>