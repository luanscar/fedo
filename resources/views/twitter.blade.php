<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full"
    :class="{ 'dark text-white': darkMode === true }" x-data="{ darkMode: false, toggle() { this.open = !this.open } }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fedo') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="h-full font-sans antialiased dark:bg-black-100">

    <main class="container mx-auto grid h-full grid-cols-4">

        <aside class="relative">
            <div class="sticky top-4 mx-4">
                {{-- SEARCH --}}
                <x-side.search />
                {{-- END SEARCH --}}
                <x-side.profile-info />

                <x-side.skills />


            </div>
        </aside>
        {{-- END MENU --}}


        {{-- CENTER --}}
        <div class="relative col-span-2 mx-4 h-full">
            <div class="sticky top-0 w-full bg-black-100 pb-4">
                <div class="flex items-center justify-center gap-12 pt-8">
                    <x-menu.item icon="home" :active="true" />
                    <x-menu.item icon="comment" :active="false" />
                    <x-menu.item icon="bell" :active="false" />
                    <x-menu.item icon="favorite" :active="false" />
                </div>
            </div>

            <div class="h-auto gap-4 rounded-[25px] bg-black-300 p-4">

                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 overflow-hidden rounded-[20px] border-4 border-black-100/20 bg-black-200">
                        <img class="object-scale-down object-center" src="https://i.imgur.com/A7LDS5a.png"
                            alt="">
                    </div>

                    <div class="flex-1 grow">
                        <textarea name="" id="" cols="50" rows="1"
                            placeholder="Tell your friends about your thoughts"
                            class="w-full resize-none rounded-[15px] border-none bg-black-200 text-white focus:outline-none focus:ring-0"></textarea>
                    </div>
                </div>
                <div class="bg-black-200">

                </div>
            </div>

            <div class="w-full border-b-[0.625px]">
                <div class="bg-slate-500">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquam dolor arcu,
                        finibus
                        porttitor tellus placerat eu. Suspendisse nec sem ut dui consequat euismod. Aenean lacus
                        justo,
                        vestibulum in enim ut, iaculis placerat leo. Mauris cursus dignissim erat. Maecenas
                        sollicitudin
                        felis elementum, ornare quam vel, pharetra augue. In hac habitasse platea dictumst. Morbi
                        tempor
                        dapibus tellus, id sollicitudin ante. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.
                        Proin gravida ipsum mi, id convallis quam facilisis et. Maecenas scelerisque, nulla eu
                        tincidunt
                        auctor, ipsum quam scelerisque massa, a ornare odio purus ut leo. Nulla auctor lacus urna,
                        imperdiet eleifend sapien convallis eget. Maecenas id aliquet lorem. Mauris scelerisque, dui
                        vestibulum lobortis varius, lacus quam feugiat massa, at volutpat augue magna a est. Fusce
                        et
                        orci viverra, pharetra odio eu, ullamcorper elit. In sit amet tincidunt nulla, non dapibus
                        nibh.
                        Fusce eleifend nulla ultrices odio ultricies bibendum.

                        Aliquam lectus nisi, pulvinar quis posuere quis, molestie in ante. Cras rhoncus nec leo
                        congue
                        tincidunt. Maecenas ut diam a ante mattis gravida. Nam sodales venenatis varius. Phasellus
                        faucibus convallis nisi ac tincidunt. Etiam porta laoreet lacus. Sed tincidunt, tortor a
                        iaculis
                        ullamcorper, justo mauris eleifend mauris, non tristique turpis nibh et ante.

                        Fusce sed varius urna, sit amet imperdiet ex. Curabitur ac ipsum diam. Nulla est augue,
                        ultricies quis ligula nec, efficitur mattis sem. Nam quis eros in augue auctor ultricies
                        vitae
                        in arcu. Donec laoreet consequat dui, vitae lobortis eros condimentum nec. Praesent
                        vehicula,
                        lectus sit amet mattis lacinia, orci massa varius metus, vel pulvinar tellus massa ut metus.
                        Morbi luctus maximus ante eu volutpat. Ut bibendum sed lorem pretium suscipit. Sed ac nisi
                        id
                        lorem ornare pellentesque vel vestibulum lectus. Maecenas posuere odio neque, a auctor
                        lectus
                        fringilla id. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus
                        mus.

                        Curabitur eu maximus ex, a placerat ante. Nunc varius mi nec nisl sodales, in eleifend augue
                        rutrum. Nunc vehicula vel leo ac ullamcorper. Proin ut diam a odio dictum venenatis.
                        Vestibulum
                        suscipit mattis diam, a porta leo rhoncus sed. Aliquam vitae vulputate purus. Quisque vitae
                        nibh
                        eget diam dictum hendrerit. Vivamus at velit molestie, molestie risus non, pretium arcu.
                        Phasellus id laoreet enim. Etiam urna mi, posuere vel diam id, eleifend condimentum dolor.
                        Vivamus pretium libero eu auctor vehicula. Nullam sagittis, nunc sit amet pellentesque
                        ultricies, leo augue tempus sem, sed mattis ipsum risus et quam. Nulla sodales mi nec diam
                        cursus, in semper magna tincidunt. Aenean at erat vel metus posuere eleifend ut quis nisl.

                        Ut fringilla tincidunt massa, molestie malesuada orci aliquet eget. Cras bibendum
                        condimentum
                        tellus, id pretium lectus dictum vitae. Ut rhoncus enim nec magna fermentum, in tempor nunc
                        elementum. Curabitur eget nulla et eros maximus auctor quis in elit. Duis fringilla congue
                        pharetra. Curabitur accumsan dui eu dolor efficitur, nec scelerisque ipsum tristique.
                        Vivamus
                        nec tortor sed nulla mollis vestibulum maximus a augue. Curabitur id pulvinar ante, non
                        pulvinar
                        tellus. Ut blandit consequat ante, et iaculis felis lobortis vel. Sed quis efficitur tortor.
                        In
                        tincidunt, erat sit amet porttitor condimentum, turpis nisl feugiat justo, quis vulputate
                        lectus
                        mi ut est. Pellentesque quis ex nec ipsum dapibus aliquet eget eu magna. Orci varius natoque
                        penatibus et magnis dis parturient montes, nascetur ridiculus mus.

                        Pellentesque lobortis odio ut arcu tincidunt, sed condimentum arcu dignissim. Praesent
                        aliquet
                        at est vitae eleifend. Curabitur luctus eleifend arcu eget ultricies. Morbi semper commodo
                        lorem
                        ac consectetur. Vivamus at ornare metus. Nullam at euismod metus. Aliquam mattis eu ex et
                        ultricies. Maecenas semper turpis sit amet suscipit finibus. Ut rutrum bibendum erat non
                        gravida. Phasellus pharetra feugiat dignissim. Vestibulum ultrices tellus vitae ex cursus
                        eleifend. Sed mattis placerat turpis vel scelerisque.

                        Aenean in hendrerit urna. Vivamus hendrerit enim in imperdiet tempus. Aliquam varius tempus
                        eros
                        ut consequat. Nullam ipsum eros, venenatis sit amet nibh vitae, condimentum molestie odio.
                        Sed
                        et ultrices ligula. Nunc cursus faucibus mauris, nec vulputate tortor faucibus nec. Vivamus
                        enim
                        quam, tincidunt a sapien id, aliquet mattis enim. Aenean suscipit tempus arcu, nec gravida
                        dolor
                        dictum sit amet. Fusce non libero eu lacus porta venenatis. Aenean viverra ex velit, sed
                        imperdiet lectus pharetra eu.

                        Phasellus pulvinar, dui sed finibus tincidunt, neque diam sollicitudin quam, nec semper mi
                        metus
                        eget lorem. Quisque pharetra imperdiet justo. Aliquam vel aliquam erat. Suspendisse dictum
                        nunc
                        enim, sit amet vulputate neque dapibus id. Morbi eu diam iaculis, condimentum nulla et,
                        condimentum nisl. Aliquam erat volutpat. Cras luctus, orci ac dictum eleifend, magna nulla
                        facilisis massa, ac semper quam elit quis eros. Ut viverra felis elit, in auctor ante
                        eleifend
                        vitae. Maecenas ut bibendum nunc. Fusce turpis nibh, tempor at urna at, iaculis iaculis
                        massa.
                        Nunc ligula urna, lobortis et mi a, tempor pulvinar libero. Pellentesque habitant morbi
                        tristique senectus et netus et malesuada fames ac turpis egestas.

                        Proin in nisl eu enim aliquet tincidunt. Pellentesque ac velit vitae ex euismod consequat.
                        Nullam a hendrerit eros. Duis accumsan rutrum elit, vel egestas elit sodales at. Etiam
                        tempus,
                        tellus ut varius efficitur, ante erat cursus magna, vitae imperdiet nisi augue non velit.
                        Duis
                        accumsan ipsum nec condimentum posuere. Mauris bibendum dignissim ante, vel fermentum elit
                        vestibulum consectetur.

                        Donec ultrices mauris et varius scelerisque. Nulla sapien risus, suscipit sed justo vitae,
                        finibus congue urna. Sed ante odio, molestie in dolor eu, posuere accumsan risus. Sed libero
                        quam, posuere nec rhoncus eu, rhoncus et nibh. Curabitur non urna erat. Nulla purus turpis,
                        tincidunt id scelerisque ut, auctor id nunc. Donec ac lorem sapien. Nam at sollicitudin
                        diam.
                        Fusce mollis lacinia malesuada.

                        Donec tincidunt eget urna vel consequat. Suspendisse ut aliquam mi. Integer pulvinar
                        molestie
                        metus at commodo. Donec eget ultrices quam. Vivamus ullamcorper ipsum sed pulvinar interdum.
                        Quisque pharetra interdum nisl eget porttitor. Duis sagittis tempus euismod. Praesent eget
                        molestie ante. Donec a felis laoreet, eleifend ligula vehicula, volutpat diam. Vivamus
                        mauris
                        libero, feugiat at eros vel, tincidunt commodo eros. Curabitur gravida mollis dignissim.

                        Integer lobortis commodo dolor, at imperdiet tellus congue id. Praesent efficitur arcu quis
                        eros
                        pulvinar sagittis. Integer laoreet nunc eget orci semper, vitae condimentum turpis finibus.
                        Duis
                        malesuada lorem sem, et gravida est pellentesque non. Nam sollicitudin ante eu dui ultrices,
                        quis varius orci tincidunt. Phasellus suscipit placerat sagittis. In vel turpis commodo,
                        hendrerit dolor tincidunt, congue lectus. Praesent laoreet ac libero sit amet facilisis.
                        Nullam
                        felis felis, varius a viverra eu, convallis sit amet nisi. Curabitur commodo magna in est
                        ultrices, ac vulputate odio egestas. Nunc vitae tincidunt ex. Aliquam tristique posuere
                        lectus
                        et tincidunt. In at ullamcorper quam. Pellentesque habitant morbi tristique senectus et
                        netus et
                        malesuada fames ac turpis egestas. Donec pulvinar tellus libero, ut scelerisque ante varius
                        in.
                        Duis placerat justo eu congue ornare.

                        In scelerisque, nibh viverra consectetur semper, est turpis placerat enim, sed consequat
                        massa
                        felis sit amet mi. In nec justo consectetur, maximus arcu vel, placerat tortor. Ut sed
                        vulputate
                        nibh, sed viverra ligula. Maecenas non augue velit. Sed vel lorem finibus, condimentum elit
                        rhoncus, gravida nibh. Nam magna mi, maximus nec vestibulum ut, accumsan quis nulla.
                        Curabitur
                        posuere tincidunt ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        id
                        gravida ipsum. Vivamus consequat nibh ornare, euismod lorem eget, efficitur erat. Curabitur
                        iaculis, diam a egestas porta, nunc dolor elementum diam, sed pretium lacus metus ut diam.
                        Sed
                        ut metus fringilla, fermentum sapien nec, molestie nisi. Donec lectus erat, vestibulum ac
                        porttitor et, pretium sollicitudin nibh.

                        Donec tristique sem eu ante accumsan lacinia. Suspendisse mollis placerat metus a
                        sollicitudin.
                        Quisque mattis luctus quam quis volutpat. Vestibulum fringilla nisi mattis, molestie lectus
                        ac,
                        feugiat leo. Aenean sagittis orci sed nunc pulvinar, aliquet blandit diam dictum. Nam eros
                        purus, tincidunt quis augue eget, feugiat ultricies arcu. Nam mollis ullamcorper turpis.
                        Class
                        aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Quisque
                        quis tortor sed quam rutrum luctus. Morbi fringilla ultricies nisi, quis dictum purus
                        sagittis
                        vel. Mauris vulputate ut lacus non blandit.

                        Duis enim orci, rutrum id quam vel, dictum pellentesque elit. Pellentesque fermentum tellus
                        quis
                        ultrices eleifend. Nulla aliquam pretium purus eget aliquet. Ut eu condimentum ipsum.
                        Praesent
                        elementum tellus in libero interdum ultrices. Vivamus molestie, odio fringilla efficitur
                        finibus, elit ex ultrices lectus, condimentum fermentum mauris eros vel risus. Praesent
                        ultrices
                        dui elit. Morbi venenatis, tortor quis fermentum facilisis, tortor mi vestibulum mi, sed
                        mollis
                        enim magna non elit. Donec vitae libero id purus imperdiet rhoncus eget non leo. Donec
                        dapibus
                        tempor quam, eu ultricies metus mollis et. Donec quis ipsum commodo nisl consequat commodo.
                        Cras
                        volutpat, libero vitae laoreet congue, nibh dui sodales leo, sit amet tempor dolor nulla id
                        mauris. Sed non metus nisl. Donec imperdiet luctus turpis in hendrerit. Ut finibus quam a
                        libero
                        cursus accumsan.

                        Mauris pulvinar ac nulla vitae maximus. Quisque suscipit elementum sollicitudin. Morbi vitae
                        metus nec purus auctor ullamcorper sit amet vitae ligula. Aenean vitae quam a nisl porttitor
                        viverra. In ac quam leo. Ut ac luctus mi. Mauris vel ornare ipsum. Vivamus suscipit magna ut
                        mi
                        ultricies interdum.

                        Cras sem tortor, tempus non velit at, tincidunt elementum enim. Maecenas imperdiet nibh
                        iaculis
                        pharetra interdum. Aliquam vitae metus vitae ante venenatis eleifend nec eget libero. Mauris
                        sed
                        ligula a sem tempus efficitur. Nullam rhoncus arcu enim, id venenatis ligula consequat sed.
                        Donec scelerisque molestie massa. Praesent nec nisi posuere sapien pharetra ornare mollis
                        sed
                        mi. Praesent finibus lobortis ante eget lobortis. Sed eget neque sit amet eros dictum
                        tincidunt
                        eu ac mi. Aenean at fringilla lectus, vitae porttitor dui. Phasellus nec lacus neque.
                        Integer
                        vel dignissim augue. Pellentesque in elementum neque. Suspendisse dapibus purus ut lacus
                        eleifend, vitae pharetra ex sodales. Praesent blandit sollicitudin accumsan.

                        Vivamus dignissim libero in suscipit lacinia. Phasellus sollicitudin sem non sem facilisis,
                        a
                        ultrices leo lacinia. Nullam in massa lobortis, facilisis orci sit amet, vestibulum odio.
                        Praesent quis placerat lectus, non dictum odio. Sed pharetra lectus ipsum, in congue dui
                        tristique ac. In a vehicula orci, nec tempor tellus. Pellentesque in sapien leo. Maecenas eu
                        pretium leo. Quisque molestie tellus et dapibus tristique. Duis tortor sem, ultrices ac
                        fringilla sit amet, molestie et erat. Integer semper venenatis est, non sagittis orci.
                        Curabitur
                        egestas ultrices orci, id vestibulum ipsum elementum quis. Curabitur non imperdiet arcu.

                        Morbi maximus eros consectetur lorem placerat, ac molestie dolor condimentum. Sed porttitor,
                        nulla non vehicula varius, nisl risus dapibus elit, in sollicitudin lacus purus a urna.
                        Integer
                        euismod sit amet nisl at rutrum. Ut laoreet nibh neque, ut convallis risus tempor sed.
                        Quisque
                        mattis erat at sapien rhoncus, et sagittis urna hendrerit. Nulla vel tristique elit. Duis
                        pharetra, magna eget ultricies vulputate, tellus purus lacinia eros, a consectetur magna
                        velit
                        tempor sapien. Curabitur vehicula fermentum arcu, lacinia maximus urna cursus quis.
                        Vestibulum
                        lacinia pretium enim. Nulla eget leo sodales, fermentum lacus vel, viverra enim. In sagittis
                        tempor leo eu fermentum. Donec fringilla, libero eget tincidunt faucibus, arcu augue
                        bibendum
                        libero, in placerat dui quam nec elit.

                        Maecenas vel orci id nisi fringilla mollis nec eu justo. Suspendisse sed leo sit amet massa
                        placerat faucibus. In hac habitasse platea dictumst. Nam ligula augue, porttitor non turpis
                        non,
                        vestibulum hendrerit orci. Vivamus justo ante, porta nec eleifend vel, luctus vel ligula.
                        Donec
                        fermentum mi sit amet justo tempor, eu eleifend libero hendrerit. Aenean fringilla, magna
                        feugiat maximus interdum, velit neque feugiat risus, sit amet laoreet nisi mauris in augue.
                        Sed
                        interdum efficitur magna, vitae semper dolor finibus et. Sed id ante at quam convallis
                        mollis.

                        Proin porttitor, leo vel sollicitudin pellentesque, lacus dolor scelerisque nibh, ac viverra
                        neque nibh at tortor. Vestibulum suscipit leo ut magna vulputate varius. Integer eu tempus
                        dui.
                        Proin gravida finibus dolor, non pretium orci iaculis non. Vestibulum hendrerit est eget
                        orci
                        cursus commodo. Nunc consectetur mauris tristique justo ultrices, ut gravida tellus
                        tincidunt.
                        Vivamus quis eros a quam lacinia pulvinar in vel ex. Ut porta sem sed augue auctor gravida
                        vitae
                        sit amet lorem. Integer fringilla purus eget odio semper, dapibus mollis sapien elementum.
                        Vivamus ut scelerisque sem.

                        Phasellus varius eu quam eu cursus. Sed faucibus sed erat quis viverra. Fusce non blandit
                        erat.
                        Sed lacus lacus, mollis ut ornare ac, tempus non enim. Sed a malesuada nibh. Mauris in
                        blandit
                        eros. Duis malesuada finibus diam, non pharetra est. Integer nec elementum justo. Integer
                        sed
                        ornare mi. Mauris leo massa, mollis iaculis euismod gravida, fermentum nec nisi. Morbi
                        congue
                        consequat sem, porttitor volutpat nulla vulputate ut.

                        Praesent consectetur leo egestas, condimentum ante in, mattis lacus. Aenean eros neque,
                        convallis consequat purus in, ullamcorper cursus metus. Curabitur sit amet nisi sagittis,
                        ultrices nibh vitae, fringilla risus. Ut condimentum tincidunt ornare. Pellentesque aliquet
                        lacus ac facilisis volutpat. Nullam vitae lectus pulvinar, bibendum enim ac, sodales nulla.
                        Donec maximus tempor libero, ut luctus dui sagittis quis. Curabitur at justo at turpis
                        malesuada
                        aliquet id at neque. Sed sed lorem eu velit porta gravida vel ut massa. Nulla varius erat
                        quam,
                        id sodales nibh faucibus sit amet. Integer pellentesque nibh sit amet est tempor commodo.
                        Aenean
                        non sodales arcu. Sed in efficitur felis. Ut dignissim nulla est. Etiam tempus mi id arcu
                        sagittis lobortis.

                        Nunc tristique urna sed ultrices tincidunt. Nunc risus mauris, semper vel libero ac, lacinia
                        lobortis leo. Integer feugiat varius interdum. Ut lacinia felis sit amet erat varius
                        viverra.
                        Phasellus eget urna massa. Phasellus vitae nunc at ex posuere tincidunt ac molestie dolor.
                        Lorem
                        ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus iaculis enim nec maximus.
                        Vestibulum sed venenatis nunc, vestibulum sagittis urna. Nunc tempor orci ac tempor
                        vehicula.
                        Fusce finibus massa sit amet magna commodo egestas.

                        Suspendisse ut rutrum lacus. Pellentesque eleifend risus eu nibh sodales, non mollis lectus
                        vulputate. Sed vehicula sapien nec ligula lobortis dapibus. Suspendisse potenti. Nulla
                        volutpat
                        egestas ipsum, eu suscipit eros fermentum vitae. Curabitur malesuada erat elit, in
                        sollicitudin
                        lorem porttitor vitae. Integer tempor eros tincidunt laoreet venenatis. Cras sodales, magna
                        id
                        feugiat posuere, lectus neque maximus lorem, id finibus urna sapien vestibulum turpis.
                        Nullam
                        dictum felis orci, a ultrices orci porta a. Aliquam blandit tellus non ligula luctus
                        posuere.
                        Donec sodales nisl vitae libero elementum aliquet. Aliquam aliquam turpis nisi, non viverra
                        erat
                        gravida a. Praesent fringilla blandit ante finibus tristique. Proin vehicula, tortor quis
                        tristique rhoncus, nibh lectus sagittis mauris, quis semper quam nisi sed leo.

                        Maecenas neque ligula, rhoncus eget fermentum in, lobortis id ex. Vivamus at consectetur
                        lectus.
                        Nullam quis lacus facilisis, venenatis turpis non, vehicula nisi. Curabitur a metus vitae
                        mauris
                        fringilla cursus nec convallis nisl. Nullam non tristique erat, sed tempus ex. Cras at magna
                        ut
                        nulla posuere elementum a sed dolor. Class aptent taciti sociosqu ad litora torquent per
                        conubia
                        nostra, per inceptos himenaeos.

                        Nulla vehicula elit in dui viverra, vel porttitor odio blandit. Class aptent taciti sociosqu
                        ad
                        litora torquent per conubia nostra, per inceptos himenaeos. Proin ac diam eget tellus
                        aliquam
                        aliquet. Donec porta ipsum dolor, vel rhoncus dolor sodales vel. Pellentesque volutpat erat
                        non
                        neque ultrices luctus. Cras a mauris varius, tempus lorem eleifend, feugiat massa.
                        Vestibulum
                        volutpat nec ligula sed condimentum. Sed et nisi bibendum, tristique velit non, tempus leo.
                        Phasellus lacinia, mauris et vulputate ultrices, erat magna sagittis enim, sed lacinia
                        libero
                        turpis luctus tortor. Maecenas egestas commodo augue, non mollis est dignissim eu. Sed
                        placerat
                        sem eu arcu sodales, in mattis urna euismod.

                        Duis at odio lacus. Suspendisse nec nulla ac enim iaculis bibendum nec vel nunc. Vivamus
                        pharetra tempus ipsum ac vestibulum. Quisque sodales gravida orci eget sodales. Integer quis
                        eros in nunc tristique posuere at eu lacus. Duis a condimentum augue, nec pulvinar urna.
                        Mauris
                        ipsum nibh, hendrerit ut venenatis vel, aliquet eu mi. Mauris vehicula lacus ac ultrices
                        cursus.

                        Phasellus vitae cursus risus, ut vehicula sem. Aliquam vel mauris placerat, finibus urna
                        bibendum, finibus elit. Donec feugiat ultrices accumsan. Duis nec ipsum euismod, dapibus mi
                        eget, scelerisque massa. Aenean semper urna nec ultrices pellentesque. Nunc sed justo mi. Ut
                        non
                        tempus sem. Nulla volutpat leo et erat aliquam ultrices. Curabitur sagittis dolor id purus
                        hendrerit, in faucibus ante tincidunt. Vivamus vel erat at sem interdum feugiat vel ut
                        justo.
                        Quisque et pretium nulla. Vestibulum blandit et sapien a condimentum. Sed quis purus tellus.
                        Donec sed nisi fringilla, posuere metus at, semper dolor. Nam ac enim libero. Phasellus sed
                        ullamcorper ipsum.</span>
                </div>
            </div>
        </div>
        {{-- END CENTER --}}

        {{-- RIGHT SIDE --}}
        <div class="relative h-full">
            <div class="sticky top-4 h-auto">
                <label class="relative inline-flex cursor-pointer items-center">
                    <input type="checkbox" :value="darkMode" class="peer sr-only" @change="darkMode = !darkMode">
                    <div
                        class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-blue-800">
                    </div>
                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                </label>
            </div>
        </div>

        </div>
        {{-- END RIGHT SIDE --}}

    </main>

    @livewireScripts
</body>

</html>
