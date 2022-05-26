@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Artikel</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="{{ url('stokdarah', $stokdarah->id ) }}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="stokdarah" class="form-label">A</label>
      <input type="text" class="form-control @error('stokdarah') is-invalid @enderror" id="stokdarah" name="stokdarah" required value="{{ $stokdarah->a }}">
      @error('stokdarah')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="stokdarah" class="form-label">B</label>
      <input type="text" class="form-control @error('stokdarah') is-invalid @enderror" id="stokdarah" name="stokdarah" required value="{{ $stokdarah->b }}">
      @error('stokdarah')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="stokdarah" class="form-label">AB</label>
      <input type="text" class="form-control @error('stokdarah') is-invalid @enderror" id="stokdarah" name="stokdarah" required value="{{ $stokdarah->ab}}">
      @error('stokdarah')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="stokdarah" class="form-label">O</label>
      <input type="text" class="form-control @error('stokdarah') is-invalid @enderror" id="stokdarah" name="stokdarah" required value="{{ $stokdarah->o }}">
      @error('stokdarah')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    {{-- <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"  required value="{{ old('slug',$artikel->slug) }}">
      @error('slug')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="image" class="form-label  @error('image') is-invalid @enderror">Upload gambar</label>
      <input type="hidden" name="oldImage" value="{{ $artikel->iamge }}">
      @if ($artikel->image)
      <img src="{{ asset('storage/'.$artikel->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
      @else
      <img class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      
      <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
      @error('image')
          <div class="invalid-feedback">
          {{ $message }}
          </div>  
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input id="body" type="hidden" name="body" required value="{{ old('body',$artikel->body) }}">
      <trix-editor input="body"></trix-editor>
    </div> --}}
    <button type="submit" class="btn btn-primary">Update Artikel</button>
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