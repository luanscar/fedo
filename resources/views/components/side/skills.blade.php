@props(['skills' => ['UX Design', 'Copywriting', 'Mobile', 'Research', 'User Interview', 'JS', 'Logo']])

<div class="text-xl">
    <h1 class="w-full pb-4"> Skills </h1>

    <div class="flex flex-wrap gap-5">
        @foreach ($skills as $skill)
            <span
                {{ $attributes->class(['text-sm  bg-black-400 rounded-[10px] px-4 py-2  shadow-md cursor-pointer']) }}>
                {{ $skill }} </span>
        @endforeach

    </div>
</div>
