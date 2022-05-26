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
      <p>Update terakhir : {{ date('l, d-m-Y ') }} </p>
      <p>Stok dapat berubah sewaktu-waktu. Untuk konfirmasi stok, silahkan menghubungi UDD</p>
    </div>
    <div class="row mt-5">
      <div class="col-lg-3">
        <img src="img/a.png" alt="a" class="rounded mx-auto d-block">

        <h2 class="text-center py-3">200  </h2>
      </div><!-- /.col-lg-3 -->
      
      <div class="col-lg-3">
        <img src="img/b.png" alt="a" class="rounded mx-auto d-block">

        <h2 class="text-center py-3">200</h2>
      </div><!-- /.col-lg-3 -->
      
      <div class="col-lg-3">
        <img src="img/ab.png" alt="a" class="rounded mx-auto d-block">

        <h2 class="text-center py-3">200</h2>
      </div><!-- /.col-lg-3 -->
      
      <div class="col-lg-3">
        <img src="img/o.png" alt="a" class="rounded mx-auto d-block">

        <h2 class="text-center py-3">200</h2>
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
              <h3 class="mb-0">Featured post</h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>        
            <div class="col-auto d-none d-lg-block">
              <img src="img/artikel2.png" alt="artikel" width="250" height="250">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Featured post</h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>        
            <div class="col-auto d-none d-lg-block">
              <img src="img/artikel2.png" alt="artikel" width="250" height="250">
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- kontak pmi --}}
    <div class="p-5 mb-4 bg-light rounded-3" class="kontak-pmi">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Kontak PMI</h1>
        <a href=""><p class="col-md-8 fs-4">+62 888 888 888</p></a>           
      </div>
    </div>
  </div>

  
@endsection