<figure style="border: 1px solid black;">
    <a href="{{ url('/'.$tag) }}"><div class="effect-duke">
      <img src="{{ asset('images/'.$image_path) }}" alt="img20"/>
      <figcaption>
          <h2>Medieval <span>{{ $title }}</span></h2>
          <p>Ver más</p>
      </figcaption>
    </div></a>
    <div>
      <header>
        <h3>{{ $title }}</h3>
      </header>
      <p style="width: 100%;">{{ $body }}</p>
    </div>
</figure>
