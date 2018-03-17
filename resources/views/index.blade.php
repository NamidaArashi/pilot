@extends('layouts.indexLayout')

@section('content')
  <section class="intro">
    @component('partials/content')
      @slot('title')
        Tienda de artículos medievales
      @endslot
      @slot('body')
        Proident noster hic consequat firmissimum, tempor et non quorum nostrud ita iis
        aliqua fabulas, an ea quem commodo, est tempor deserunt o amet si nostrud,
        voluptate velit in senserit tractavissent, hic te summis offendit. Ingeniis
        ipsum anim quamquam eram ad quid cernantur sed senserit de possumus quo
        cernantur o admodum hic aliqua laboris. Aut sint probant cupidatat. Do minim
        quamquam mandaremus.Doctrina sunt quorum commodo quae si iis dolor culpa ubi
        incurreret est cillum fidelissimae litteris dolore eiusmod, quo quid incididunt
        offendit. Ubi et tamen eiusmod. Est veniam deserunt consectetur ne export
        cupidatat reprehenderit, vidisse esse admodum, qui nam labore veniam aute.
        Multos quamquam quo doctrina.
      @endslot

      <!-- ¿Es un contenido introductorio? -->
      {{ true }}
    @endcomponent
  </section>

  <section class="gallery">
    @if (collect($categories)->isNotEmpty())
      <div class="grid">
        <div class="row ml-0 mr-0">
          @foreach ($categories as $category)
            @component('partials/gallery')
              @slot('title')
                {{ $category->title }}
              @endslot
              @slot('body')
                {{ $category->body }}
              @endslot
              @slot('image_path')
                {{ $category->image_path }}
              @endslot
              @slot('tag')
                {{ $category->tag }}
              @endslot
            @endcomponent
          @endforeach
        </div>
      </div>
    @else
      <div class="row">
        <div class="alert alert-info" role="alert">
          <span class="fas fa-info-circle"></span> ¡Vaya! Parece que aún no se han añadido categorías en la tienda. Tenga paciencia, ¡pronto estarán disponibles!
        </div>
      </div>
    @endif
  </section>

  <section class="content">
    @component('partials/content')
      @slot('title')
        Medievales, la tienda para gente imaginativa
      @endslot
      @slot('body')
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
      @endslot
    @endcomponent

    @component('partials/content')
      @slot('title')
        Porque esta tienda es mucho más que sólo una tienda
      @endslot
      @slot('body')
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
      @endslot
    @endcomponent
  </section>

@endsection
