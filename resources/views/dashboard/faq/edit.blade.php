@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Faq</h1>
</div>

<div class="col-lg-8">
  <form action="/dashboard/faq/{{ $faq->id }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="pertanyaan" class="form-label">Pertanyaan</label>
      <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" name="pertanyaan" required value="{{ old('pertanyaan',$faq->pertanyaan) }}">
      @error('pertanyaan')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="jawaban" class="form-label">Jawaban</label>
      <input type="text" class="form-control @error('jawaban') is-invalid @enderror" id="jawaban" name="jawaban"  required value="{{ old('jawaban',$faq->jawaban) }}">
      @error('jawaban')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update Faq</button>
  </form>
</div>
  
@endsection 