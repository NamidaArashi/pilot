<header>

  @if ($slot != "")
    <h1>{{ $title }}</h1>
  @else
    <h2>{{ $title }}</h2>
  @endif
</header>

<p class="text-justify">{{ $body }}</p>
