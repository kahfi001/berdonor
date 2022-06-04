@extends('layouts.main')

@section('container')
  <div class="container">
      <div class="row flex-lg-row-reverse align-items-center g-2">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="img/ilustrationdonor.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1>Apakah Anda Bersedia Mendonorkan Darah Anda?</h1>
          <p class="lead">Satu tetes <span style="color:red;">darah</span>  sangat <span style="color:red;">berarti</span> bagi mereka</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="/donor" class="btn btn-outline-danger">Donor sekarang</a>
          </div>
        </div>
      </div>
    
    <div class="text-center my-5">
      <h2>Stok Darah</h2>
      <p>Update terakhir : {{ date(' d-m-Y ') }} </p>
      <p>Stok dapat berubah sewaktu-waktu. Untuk konfirmasi stok, silahkan menghubungi UDD</p>
    </div>

    <div class="row mt-5">
      <div class="col-lg-3">
        <img src="img/a.png" alt="a" class="rounded mx-auto d-block">

        <h2 class="text-center py-3">{{ $stokdarah[0]->a }}</h2>
      </div><!-- /.col-lg-3 -->
      
      <div class="col-lg-3">
        <img src="img/b.png" alt="a" class="rounded mx-auto d-block">

        <h2 class="text-center py-3">{{ $stokdarah[0]->b }}</h2>
      </div><!-- /.col-lg-3 -->
      
      <div class="col-lg-3">
        <img src="img/ab.png" alt="a" class="rounded mx-auto d-block">

        <h2 class="text-center py-3">{{ $stokdarah[0]->ab }}</h2>
      </div><!-- /.col-lg-3 -->
      
      <div class="col-lg-3">
        <img src="img/o.png" alt="a" class="rounded mx-auto d-block">

        <h2 class="text-center py-3">{{ $stokdarah[0]->o }}</h2>
      </div><!-- /.col-lg-3 -->
    </div>

    <div>
      <div class="text-center my-5">
        <h2>Artikel</h2>
        <h3>Kepoin Artikel Kami Yuk!</h3>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h5><a href="/artikel/{{ $artikel[0]->slug }}" class="text-decoration-none ">{{ $artikel[0]->tittle }}</a></h5>
              <div class="mb-1 text-muted">{{ $artikel[0]->created_at->diffForHumans() }}</div>
              <p class="card-text mb-auto">{{ $artikel[0]->excerpt }}</p>
            </div>        
            <div class="col-auto d-none d-lg-block">
             @if ($artikel[0]->image)
              <div style="max-height:250px; overflow:hidden;">
                <img src="{{ asset('storage/'. $artikel[0]->image) }}" class="img-fluid mt-3" alt="">
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?{{ $artikel[0]->author->name }}" alt="artikel" width="250" height="250">      
              @endif
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h5><a href="/artikel/{{ $artikel[1]->slug }}" class="text-decoration-none ">{{ $artikel[1]->tittle }}</a></h5>
              <div class="mb-1 text-muted">{{ $artikel[1]->created_at->diffForHumans() }}</div>
              <p class="card-text mb-auto">{{ $artikel[1]->excerpt }}</p>
            </div>        
            <div class="col-auto d-none d-lg-block">
             @if ($artikel[1]->image)
              <div style="max-height:250px; overflow:hidden;">
                <img src="{{ asset('storage/'. $artikel[1]->image) }}" class="img-fluid mt-3" alt="">
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?{{ $artikel[1]->author->name }}" alt="artikel" width="250" height="250">      
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- kontak pmi --}}
    <div class=" mb-4 bg-light rounded-3 kontak-pmi" >
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"> Kontak kami, jika merasa kesulitan</h1>
        {{-- <img src="/img/faqhome.png" alt="" class="rounded float-end" style="width:20%;">         --}}
       <a href=""><p class="col-md-8 fs-4"><span data-feather="mail"></span>Berdonor@gmail.com</p></a>   
      </div>
    </div>
  </div>

  
@endsection