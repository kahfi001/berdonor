@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create Artikel</h1>
</div>

<div class="col-lg-8">
  <form action="/dashboard/artikel" method="post">
    @csrf
    <div class="mb-3">
      <label for="tittle" class="form-label">Tittle</label>
      <input type="text" class="form-control @error('tittle') is-invalid @enderror" id="tittle" name="tittle" required>
      @error('tittle')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  required>
      @error('slug')
      <div class="invalid-feedback">
      {{ $message }}
      </div>  
  @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input id="body" type="hidden" name="body" required>
      <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Buat Artikel</button>
  </form>
</div>
  
<script>
  const tittle = document.querySelector('#tittle');
  const slug = document.querySelector('#slug');

  tittle.addEventListener('change', function(){
    fetch('/dashboard/artikel/checkSlug?tittle='+tittle.value)
      .then(response=>response.json())
      .then(data=> slug.value = data.slug)
  }); 

  document.addEventListener('trix-file-accept',function(e){
    e.preventDefault();
  })
</script>
@endsection 