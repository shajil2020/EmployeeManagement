<!-- resources/views/components/input-field.blade.php -->
@props(['label', 'name', 'value' => null, 'required' => false])

<div>
    <label for="{{ $name }}">{{ $label }}:</label>
    <input autocomplete="off" class="form-control" type="text" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" {{ $required ? 'required' : '' }}>
</div>
