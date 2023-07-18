<div class="h-auto gap-4 rounded-[25px] bg-black-300 p-4">

    <div class="flex items-center gap-4">
        <div class="h-16 w-16 overflow-hidden rounded-[20px] border-4 border-black-100/20 bg-black-200">
            <img class="object-scale-down object-center" src="https://i.imgur.com/A7LDS5a.png" alt="">
        </div>

        <div class="flex-1 grow">
            <textarea name="" id="" cols="50" rows="1" placeholder="Tell your friends about your thoughts"
                class="w-full resize-none rounded-[15px] border-none bg-black-200 text-white focus:outline-none focus:ring-0"></textarea>
        </div>
    </div>

    <div class="flex justify-end gap-8">
        <x-compose.action icon="media" title="Photo" />
        <x-compose.action icon="gif" title="GIF" />
        <x-compose.action icon="gps" title="GPS" />

    </div>
</div>
