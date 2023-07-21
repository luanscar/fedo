<div class="max-sm:bg-[#5b708366] w-full absolute   left-0 h-full top-0 z-1 bg-transparent  sm:ease-in duration-100 hidden">
    <div class="z-0 bg-black absolute w-3/4 absolute left-0 h-full top-0 border-solid border-l-1 border-gray-500 shadow-lg shadow-white/50  ease-in-out duration-300 sm:-translate-x-full">

        <div class="flex flex-row font-bold text-lg items-center justify-between pl-4 pr-4 h-[53px] ">
            <span>Informações da conta</span>
            <x-icons.close class="h-[25px] w-[25px] mr-[4px]"/>
        </div>

        <div class="flex flex-col p-4">
            <div class="flex flex-row items-center justify-between">
                <div class="rounded-full  bg-slate-500 h-10 w-10"></div>
                <x-icons.plus class="fill-white border rounded-full border-gray-500 w-8 p-1"/>
            </div>

            <div class=" mt-2 flex flex-col">
                <span class="">Name</span>
                <span class=" text-gray-500">@user</span>

                <div class="mt-3 flex justify-between">
                    <strong>354 <span class="text-gray-500">Seguindo</span>
                    </strong>

                    <strong>12.4k
                        <span class="text-gray-500">Seguidores</span>
                    </strong>
                </div>
            </div>
        </div>


        <x-menu.item class="stroke-current w-6 mr-6" icon="profile" title="Perfil"/>
        <x-menu.item class=" fill-current w-6 mr-6" icon="blue" title="Blue"/>
        <x-menu.item class=" fill-current w-6 mr-6" icon="lists" title="Listas"/>

    </div>
</div>
