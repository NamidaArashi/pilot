@extends('layouts.indexLayout')

@section('content')
  @foreach ($contents as $content)
      @component('partials/content')
            @slot('title')
                {{ $content->title }}
            @endslot

            {!! nl2br($content->body) !!}
      @endcomponent
  @endforeach
@endsection
