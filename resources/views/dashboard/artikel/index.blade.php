@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Artikel</h1>
</div>
<table class="table table-striped table-sm">
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
          <a href="/dashboard/artikel/{{ $artikel->slug }}" class="btn btn-info"></a>
          <a href="" class="btn btn-warning"></a>
          <a href="" class="btn btn-danger"></a>
        </td>
      </tr>
    
        
    @endforeach
  </tbody>
</table>
    
@endsection