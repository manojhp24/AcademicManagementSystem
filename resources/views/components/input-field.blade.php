@props([
'name',
'label' => '',
'placeholder' => '',
'value' => '',
'type' => 'text',
'minlength' => null,
'maxlength' => null,
])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-2">
        {{ $label }}
    </label>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="input-field"
        placeholder="{{ $placeholder }}"
        @if($minlength) minlength="{{ $minlength }}" @endif
        @if($maxlength) maxlength="{{ $maxlength }}" @endif
        required />
</div>