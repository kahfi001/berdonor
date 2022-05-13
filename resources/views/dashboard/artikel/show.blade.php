@extends('dashboard.layouts.main')

@section('container')
  <div class="row">
    <div class="col-md-8">
      <article class="m-3">
        <h2>{{ $artikel->tittle }}</h2>
        <a href="/dashboard/artikel " class="btn btn-success"><span data-feather="arrow-left" ></span> Kembali ke artikel</a>
        <a href="/dashboard/artikel/{{ $artikel->slug }}/edit" class="btn btn-warning"><span data-feather="edit" ></span>Edit</a>
        <form action="/dashboard/artikel/{{ $artikel->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger " onclick="return confirm('Artikel akan dihapus')"><span data-feather="x-circle" ></span>Delete</button>
        </form>
        @if ($artikel->image)
        <div style="max-height:250px; overflow:hidden">
          <img src="{{ asset('storage/'. $artikel->image) }}" class="img-fluid mt-3" alt="">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $artikel->author->name }}" class="img-fluid mt-3" alt="">
            
        @endif
        {!! $artikel->body !!}
      </article>
    </div>
  </div>  
</div>
@endsection