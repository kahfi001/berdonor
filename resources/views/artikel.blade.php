@extends('layouts.main')

@section('container')

@if ($artikel->count())

@else
<p class="text-center  fs-4">Tidak ada Postingan</p>
    
@endif

{{-- <h1>Ini Halaman Artikel</h1> --}}
@foreach($artikel as $artikel)
<div class="container">
  <div class="row g-0 m-2 border rounded overflow-hidden flex-md-row  shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <article>
        <h3 class="mb-2">
            <a href="/artikel/{{ $artikel->slug }}" class="text-decoration-none ">{{ $artikel->tittle }}</a>
          </h3>
          <div class="mb-1">By : <a href="/authors/{{ $artikel->author->username }}" class="text-decoration-none ">{{ $artikel->author->name }}</a> {{ $artikel->created_at->diffForHumans() }}</div>
          <p class="card-text mb-auto">{{ $artikel->excerpt }}</p>
        </article>
      </div>
      <div class="col-auto d-none d-lg-block">
        @if ($artikel->image)
        <div style="max-height:250px; overflow:hidden;">
          <img src="{{ asset('storage/'. $artikel->image) }}" class="img-fluid mt-3" alt="">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $artikel->author->name }}" alt="artikel" width="250" height="250">      
        @endif
        
      </div>
    </div>
  </div>
  
  @endforeach
  <a href="/">Kembali ke main</a>
</div>


@endsection
