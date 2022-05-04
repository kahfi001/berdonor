@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create Artikel</h1>
</div>

<div class="col-lg-8">
  <form action="post" method="/dashboard/artikel">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug">
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input id="body" type="hidden" name="body">
      <trix-editor input="body"></trix-editor>
    </div>



    <button type="submit" class="btn btn-primary">Buat Artikel</button>
  </form>

</div>
    
<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug')

  title.addEventListener('change', function(){
    fetch('/dashboard/artikel/checkSlug?title='+title.value){
      .then(response=>response.json())
      .then(data=>slug.value=data.slug)
    }
  });

  document.addEventListener('trix-file-accept',function(e){
    e.preventDefault();
  })
</script>
@endsection 