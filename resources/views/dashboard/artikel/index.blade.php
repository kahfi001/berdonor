@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Artikel</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div> 
@endif

<table class="table table-striped table-sm">
  <a href="/dashboard/artikel/create" class="btn btn-primary mb-3">Buat artikel</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($artikel as $artikel)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $artikel->tittle }}</td>
        <td>
          <a href="/dashboard/artikel/{{ $artikel->slug }}" class="btn btn-info"><span data-feather="eye"></span> Lihat</a>
          <a href="/dashboard/artikel/{{ $artikel->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
          <form action="/dashboard/artikel/{{ $artikel->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Artikel akan dihapus')"><span data-feather="x-circle"></span> Hapus</button>
          </form>
        </td>
      </tr>
    
        
    @endforeach
  </tbody>
</table>
    
@endsection