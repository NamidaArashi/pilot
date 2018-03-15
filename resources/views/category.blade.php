@extends('layouts.indexLayout')

@section('content')
    <section class="intro">
        @component('partials/content')
            @slot('title')
                {{ $category->title }}
            @endslot

            {{ $category->body }}
        @endcomponent
    </section>

    <section>
        <picture>
            <img src="{{ asset('images/'.$category->image_path) }}" alt="img20"/>
        </picture>
    </section>

    <section class="content">
        @component('partials/content')
            @slot('title')
                {{ "Medievales, la tienda para gente imaginativa" }}
            @endslot

            Nescius veniam enim cernantur fore. Labore cernantur est proident. Quorum an te
            dolore quibusdam, hic et summis tempor illum ita de ipsum transferrem, aliqua
            possumus adipisicing, sed sint dolor export admodum a summis pariatur qui
            consequat, qui quibusdam cohaerescant ex fabulas fore arbitror.Tempor deserunt
            praesentibus, iudicem te admodum qui te dolor nam enim, id nulla sed ipsum, o
            dolor firmissimum hic an quorum quis sint mentitum, eu excepteur familiaritatem
            hic illum cupidatat eruditionem. Magna praesentibus arbitror fore mandaremus,
            expetendis sempiternum si pariatur eu pariatur cillum est appellat
            despicationes, laboris tempor senserit quibusdam ne qui multos officia, admodum
            nam malis mandaremus an vidisse ut aliqua e tamen officia do ullamco. Fore
            fabulas incididunt.
            <br />
            Cernantur e fore senserit. Culpa se an quae proident ita voluptate nam noster
            excepteur qui culpa eruditionem offendit dolor eiusmod ut legam nostrud officia
            sed nam amet legam anim constias se non non graviterque, e quis tempor ad
            fabulas quo si nulla ne sunt. Noster nam ita cillum offendit hic aliqua appellat
            o esse fore, magna constias possumus ita do export vidisse deserunt ut et quis
            arbitror quibusdam ut voluptate se expetendis, e e graviterque ad minim ut id
            tempor appellat.
        @endcomponent

        @component('partials/content')
            @slot('title')
                {{ "Porque esta tienda es mucho más que sólo una tienda" }}
            @endslot

            Nostrud cohaerescant sed eiusmod se minim in cernantur quo aute non deserunt
            cohaerescant aut singulis ad fugiat in cernantur a noster. Constias exquisitaque
            eu commodo id et nulla nam fugiat, do eram laborum constias non laborum ex
            arbitror te et in graviterque, si fugiat quamquam aliquip, summis expetendis do
            expetendis ex offendit sint export do quae. Ita quae aliquip concursionibus,
            mandaremus eu pariatur id ab fore commodo cernantur, te quem fabulas quamquam,
            malis excepteur si expetendis, se ipsum fugiat non cupidatat, magna doctrina a
            imitarentur de ne ullamco imitarentur.Tamen quibusdam coniunctione eu e noster
            consequat o te illum cohaerescant est anim voluptate e irure amet, aut illum
            appellat exquisitaque hic mandaremus ne aute id nam an duis labore nisi,
            consequat export nostrud eiusmod. Id ut reprehenderit, quo esse aliqua ne
            cernantur. Quamquam legam quamquam. De minim aliquip arbitrantur.
            <br />
            Litteris quis e singulis sempiternum. Id illum quem ex incurreret, summis
            possumus ab ingeniis nam qui illum concursionibus, veniam incurreret ita
            comprehenderit. O aute aute quem singulis. In aute legam do pariatur, senserit
            non sint.Id sed culpa legam duis, ubi do labore dolore esse. Minim o excepteur
            te legam ut senserit est veniam expetendis ad de si firmissimum, sed enim
            ullamco comprehenderit. Probant noster an probant reprehenderit, summis probant
            consequat.
        @endcomponent
    </section>

@endsection
