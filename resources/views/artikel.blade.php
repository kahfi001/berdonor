@extends('layouts.main')

@section('container')
<article class="mb-5">
  <h2>{{ $artikel->tittle }}</h2>
  <h3>{{ $artikel->author }}</h3>
  {!! $artikel->body !!}
</article>

<a href="/">Kembali ke main</a>

@endsection
