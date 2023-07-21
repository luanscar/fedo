@props(['route', 'icon', 'title' => null])

<div class="flex flex-row p-4 tracking-wide font-medium items-center text-2xl">
    <x-dynamic-component :component="'icons.' . $icon" {{ $attributes }} />
    <span>{{$title}}</span>
</div>
