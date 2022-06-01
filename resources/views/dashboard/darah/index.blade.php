@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Stok darah</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div> 
@endif

<table class="table table-striped table-sm">
  <a href="/dashboard/darah/edit/{{ $stokdarah[0]->id }}" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Golongan Darah</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead>
  <tbody>
    
      <tr>
        <td>1</td>
        <td>A</td>
        <td>{{ $stokdarah[0]->a }}</td>
      </tr>
      <tr>
        <td>2</td>
        <td>B</td>
        <td>{{ $stokdarah[0]->b }}</td>
      </tr>
      <tr>
        <td>3</td>
        <td>AB</td>
        <td>{{ $stokdarah[0]->ab }}</td>
      </tr>
      <tr>
        <td>4</td>
        <td>O</td>
        <td>{{ $stokdarah[0]->o }}</td>
      </tr>
    </tbody>
  </table>  

    
@endsection