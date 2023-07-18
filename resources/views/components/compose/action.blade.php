@props(['title', 'icon'])
<button {{ $attributes->class(['bg-black-200 px-6 py-2 gap-2 rounded-2xl flex items-center']) }}>
    <x-dynamic-component :component="'icons.' . $icon" />
    @if ($title)
        <div class="text-sm">{{ $title }}</div>
    @endif
</button>
