@extends('layouts.main')

@section('container')
<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-8">
      <article class="m-3">
        <h2>{{ $artikel->tittle }}</h2>
        <h5>By : <a href="/authors/{{ $artikel->author->username }}" class="text-decoration-none ">{{ $artikel->author->name }}</a></h5>
        <img src="https://source.unsplash.com/1200x400?{{ $artikel->author->name }}" class="img-fluid" alt="">
        {!! $artikel->body !!}
      </article>
    </div>
  </div>
</div>

<a href="/artikel">Kembali ke main</a>

@endsection