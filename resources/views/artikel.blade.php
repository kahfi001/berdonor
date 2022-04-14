@extends('layouts.main')

@section('container')
<article class="mb-5">
  <h2>{{ $artikel["tittle"] }}</h2>
  <h3>{{ $artikel["author"] }}</h3>
  <p>{{ $artikel["body"] }}</p>
</article>

<a href="/">Kembali ke main</a>

@endsection
