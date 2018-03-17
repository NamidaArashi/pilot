<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="padding: 2px;">
  <figure class="effect-zoe">
    <a href="{{ url('/'.$tag) }}">
      <img style="width: 100%;" src="{{ asset('images/'.$image_path) }}" alt="{{ 'img'.$image_path }}"/>
      <figcaption>
        <h2>Ver <span>Más</span></h2><h2><span class="fas fa-angle-double-right"></span></h2>
      </figcaption>
    </a>
  </figure>

  @if($slot != "")
    <header class="text-left text-uppercase">
      <h6><strong>{{ $title }}</strong></h6>
    </header>
    <p class="text-left col-md-4 col-lg-3 py-1 px-2" style="background-color: #444; color: #fff;">15.00 €</p>
  @else
    <header>
      <h3>{{ $title }}</h3>
    </header>
  @endif

  <p class="font-italic">{{ $body }}</p>
</div>
