@props(['active', 'route', 'icon', 'title' => null])


@php
    $classes = $active ?? false ? 'fill-yell w-8 h-8' : 'stroke-current fill-transparent w-8 h-8';
    $dot = $active ?? false ? 'absolute bottom-1 block bg-yell rounded-full w-2 h-2' : '';
@endphp

<div {{$attributes->merge(['class' => $classes])}}>
    <x-dynamic-component :component="'icons.' . $icon" {{ $attributes->merge(['class' => $classes , 'class' => '']) }} />
    <div {{ $attributes->merge(['class' => $dot]) }}>{{$title}}</div>
</div>
