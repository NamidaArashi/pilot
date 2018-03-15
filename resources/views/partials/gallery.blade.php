<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="padding: 2px;">
  <figure class="effect-zoe">
    <a href="{{ url('/'.$tag) }}">
      <img style="width: 100%;" src="{{ asset('images/'.$image_path) }}" alt="{{ 'img'.$image_path }}"/>
      <figcaption>
        <h2>Ver <span>Más</span></h2><h2 style="float: right;"><span class="fas fa-angle-double-right"></span></h2>
      </figcaption>
    </a>
  </figure>
  <header>
    <h3>{{ $title }}</h3>
  </header>
  <p>{{ $body }}</p>
</div>
