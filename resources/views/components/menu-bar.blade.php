<x-container class="z-10 flex justify-center items-center flex-row  max-h-full">
    <div class="absolute top-2 left-4 rounded-full  bg-slate-500 h-10 w-10"></div>
    <x-icons.twitter class="pt-4  fill-white w-8"/>

    {{--MENU--}}
    <div class="bg-white backdrop-opacity-10 w-full fixed z-0 left-0 h-full top-0">
        <div class="bg-black absolute w-3/4 absolute left-0 h-full top-0 border-r-1 border-white">
            <div class="flex flex-row bg-slate-500 items-center justify-between px-4 ">
                <span>Informações da conta</span>
                <x-icons.close class="h-6 w-6"/>
            </div>
            <div class="flex flex-row items-center justify-between p-4">
                <div class="rounded-full  bg-slate-500 h-10 w-10"></div>
                <x-icons.plus class="fill-white border rounded-full border-gray-500 w-8 p-1"/>
            </div>
            <div class="px-4 flex flex-col">
                <span class="">Name</span>
                <span class="text-gray-500">@user</span>
                <div class="pt-2 text-sm">
                    <strong >354</strong> <span class="text-gray-500">Seguindo</span>
                    <strong >12.4k</strong> <span class="text-gray-500">Seguidores</span>
                </div>
            </div>
        </div>
    </div>
</x-container>