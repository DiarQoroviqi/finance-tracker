@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
@enderror

{{--@props(['messages'])--}}

{{--@if ($messages)--}}
{{--    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>--}}
{{--        @foreach ((array) $messages as $message)--}}
{{--            <li>{{ $message }}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@endif--}}
