@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Faq</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div> 
@endif

<table class="table table-striped table-sm">
  <a href="/dashboard/faq/create" class="btn btn-primary mb-3">Buat Frequently Asked Quesion (FAQ)</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">pertanyaan</th>
      <th scope="col">jawaban</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($faq as $faq)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $faq->pertanyaan }}</td>
        <td>{{ $faq->jawaban }}</td>
        <td>
          <a href="/dashboard/faq/{{ $faq->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
          <form action="/dashboard/faq/{{ $faq->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('FAQ akan dihapus')"><span data-feather="x-circle"></span> Hapus</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
    
@endsection