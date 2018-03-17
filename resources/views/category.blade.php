@extends('layouts.indexLayout')

@section('content')
  @if ($intro)
    <section class="intro">
      @component('partials/content')
        @slot('title')
          {{ $intro->title }}
        @endslot
        @slot('body')
          {!! $intro->body !!}
        @endslot

        <!-- ¿Es un contenido introductorio? -->
        {{ true }}
      @endcomponent
    </section>
  @endif

  <section class="gallery">
    @if (collect($products)->isNotEmpty())
      <div class="grid">
        <div class="row ml-0 mt-0">
          @foreach ($products as $product)
            @component('partials/gallery')
              @slot('title')
                {{ $product->title }}
              @endslot
              @slot('body')
                {{ $product->body }}
              @endslot
              @slot('image_path')
                {{ $product->image_path }}
              @endslot
              @slot('tag')
                {{ $product->tag }}
              @endslot

              <!-- ¿Es una galería de productos? -->
              {{ true }}
            @endcomponent
          @endforeach
        </div>
      </div>
    @else
      <div class="alert alert-info" role="alert">
        <span class="fas fa-info-circle"></span> ¡Vaya! Parece que aún no se han añadido productos de esta categoría. Tenga paciencia, ¡pronto estarán disponibles!
      </div>
      <a href="{{ URL::previous() }}" class="btn btn-primary" role="button">Volver</a>
    @endif
  </section>

  @if(collect($contents)->isNotEmpty())
    <section class="content">
      @foreach ($contents as $content)
        @component('partials/content')
          @slot('title')
            {{ $content->title }}
          @endslot
          @slot('body')
            {!! $content->body !!}
          @endslot
        @endcomponent
      @endforeach
    </section>
  @endif

@endsection
