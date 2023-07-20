@props(['name', 'user', 'time'])

<div {{ $attributes->class([
    'flex items-center font-[15px] whitespace-nowrap text-gray-400'
]) }}>
    <strong class="mr-[5px] text-white">{{ $name }}</strong>
    <span> {{ $user }}</span>
    <div class="bg-gray-400 w-[2px] h-[2px] my-0 mx-[10px]"></div>
    <time> {{ $time }}</time>
</div>



