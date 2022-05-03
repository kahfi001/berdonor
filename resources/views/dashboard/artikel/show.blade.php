@extends('dashboard.layouts.main')

@section('container')
  <div class="row">
    <div class="col-md-8">
      <article class="m-3">
        <h2>{{ $artikel->tittle }}</h2>
        <a href="/dashboard/artikel " class="btn btn-success">kembali ke artikel</a>
        <a href="" class="btn btn-warning">edit</a>
        <a href="" class="btn btn-danger">delete</a>
        <img src="https://source.unsplash.com/1200x400?{{ $artikel->author->name }}" class="img-fluid mt-3" alt="">
        {!! $artikel->body !!}
      </article>
    </div>
  </div>  
</div>
@endsection