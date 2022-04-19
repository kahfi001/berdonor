@extends('layouts.main')

@section('container')
{{-- <h1>Ini Halaman Artikel</h1> --}}
@foreach($artikel as $artikel)
<div class="container">
  <div class="row g-0 m-2 border rounded overflow-hidden flex-md-row  shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <article>
        <h3 class="mb-2">
            <a href="/artikel/{{ $artikel->slug }}" class="text-decoration-none ">{{ $artikel->tittle }}</a>
          </h3>
          <div class="mb-1">By : <a href="/authors/{{ $artikel->user->username }}" class="text-decoration-none ">{{ $artikel->user->name }}</a></div>
          <p class="card-text mb-auto">{{ $artikel->excerpt }}</p>
        </article>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="../img/artikel1.png" alt="artikel" width="250" height="250">
      </div>
    </div>
  </div>
  
  @endforeach
  <a href="/">Kembali ke main</a>
</div>


@endsection
