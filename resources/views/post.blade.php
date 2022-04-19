@extends('layouts.main')

@section('container')
<article class="m-3">
  <h2>{{ $artikel->tittle }}</h2>
  <h5>By : <a href="/authors/{{ $artikel->user->username }}" class="text-decoration-none ">{{ $artikel->user->name }}</a></h5>
  <h3>{{ $artikel->author }}</h3>
  {!! $artikel->body !!}
</article>

<a href="/artikel">Kembali ke main</a>

@endsection