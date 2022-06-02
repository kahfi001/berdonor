@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Stok Darah</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="{{ url('dashboard/darah/update', $stokdarah->id ) }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="a" class="form-label">A</label>
      <input type="text" class="form-control @error('a') is-invalid @enderror" id="a" name="a" required value="{{ $stokdarah->a }}">
      @error('a')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="b" class="form-label">B</label>
      <input type="text" class="form-control @error('b') is-invalid @enderror" id="b" name="b" required value="{{ $stokdarah->b }}">
      @error('b')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="ab" class="form-label">AB</label>
      <input type="text" class="form-control @error('ab') is-invalid @enderror" id="ab" name="ab" required value="{{ $stokdarah->ab}}">
      @error('ab')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="o" class="form-label">O</label>
      <input type="text" class="form-control @error('o') is-invalid @enderror" id="o" name="o" required value="{{ $stokdarah->o }}">
      @error('o')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>  
    <button type="submit" class="btn btn-primary">Update Stok Darah</button>
  </form>
</div>
  
{{-- <script>
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

  function previewImage(){
    
    const image=document.querySelector('#image');
    const imgPreview=document.querySelector('.img-preview');

    imgPreview.style.display='block';

    const ofReader= new FileReader();
    ofReader.readAsDataURL(image.files[0]);

    ofReader.onload= function(oFREvent){
      imgPreview.src=oFREvent.target.result;
    }
  }
</script> --}}
@endsection 