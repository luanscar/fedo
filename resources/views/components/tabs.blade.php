@props(['title'])

<div {{ $attributes->class([
'flex justify-around items-center align-center mt-2'
]) }}>
    {{$slot}}
</div>
