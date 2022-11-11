@props(['default', 'selected' => null, 'options', 'disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm']) !!}>
    <option value="">{{ $default }}</option>

    @foreach($options as $key => $value)
        <option value="{{ $key }}" {{ (string) $key === (string) $selected ? 'selected' : '' }}>
            {{ __($value) }}
        </option>
    @endforeach
</select>
