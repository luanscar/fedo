<x-tweet.container >
    <x-tweet.retweeted>
        <x-tweet.retweeted-icon />
        Voce Retweetou
    </x-tweet.retweeted>

    <x-tweet.body>
        <x-tweet.avatar />
        <x-tweet.content>
            <x-tweet.header name="Rocketseat" user="@rocketseat" time="27 de jun" />
            <x-tweet.description> Foguete não da ré </x-tweet.description>
            <x-tweet.image-content />

            <x-tweet.icons>
                <x-icons.comment class="h-6"/>
                <x-icons.favorite class="h-6"/>
                <x-icons.retweeted class="h-6" />
            </x-tweet.icons>
        </x-tweet.content>
    </x-tweet.body>

    <x-tweet.text />
    <x-tweet.actions />
</x-tweet.container>


{{--
<div class="mt-8 w-full rounded-[25px] bg-black-300 px-4 py-4">

    <div class="flex h-auto items-center gap-4">
        <div class="self-start">
            <div class="h-16 w-16 overflow-hidden rounded-[20px] border-4 border-black-100/20 bg-black-200">
                <img class="object-scale-down object-center" src="https://i.imgur.com/A7LDS5a.png" alt="">
            </div>
        </div>
        <div class="flex flex-col" x-data="{ editing: false, count: 0 }">
            <label>
                <textarea x-data x-autosize wire:model="body" placeholder="What's happening?" @click="editing = true"
                          class="w-full resize-none rounded-[15px] border-none bg-black-200 text-2xl font-light tracking-wide text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-0"
                          rows="1" cols="50" maxlength="280" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"></textarea>


            </label>
        </div>
    </div>
    <div class="flex justify-end gap-8">
        <x-compose.action icon="gif" title="Photo" />
        <x-compose.action icon="gps" title="GIF" />
        <x-compose.action icon="gps" title="GPS" />

    </div>
</div>
--}}
