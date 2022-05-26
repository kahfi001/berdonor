@extends('layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Isi Identitas</h1>
  </div>
  <div class="col-lg-8">
    <form action="/donor" method="POST" enctype="multipart/form-data" class="row g-3">
      @csrf
        <div class="col-12">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required>
            @error('nama')
                <div class="invalid-feedback">
                {{ $message }}
                </div>  
            @enderror 
        </div>
        <div class="col-md-8">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required>
          @error('alamat')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-md-4">
          <label for="notelp" class="form-label">No telpon</label>
          <input type="text" class="form-control @error('notelp') is-invalid @enderror" id="notelp" name="notelp" required>
          @error('notelp')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-md-4  ">
          <label for="alamat" class="form-label">Tempat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required>
          @error('alamat')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-md-8">
          <label for="notelp" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control @error('notelp') is-invalid @enderror" id="notelp" name="notelp" required>
          @error('notelp')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-12">
          <label for="gender" class="form-label">Jenis Kelamin</label>
          <select class="form-select" aria-label="Default select example" id="gender">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="lastDonor" class="form-label">Tgl Donor Terakhir</label>
          <input type="date" class="form-control @error('lastDonor') is-invalid @enderror" id="lastDonor" name="lastDonor" required>
          @error('lastDonor')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-md-8">
          <label for="nowDonor" class="form-label">Sekarang Donor ke</label>
          <input type="text" class="form-control @error('nowDonor') is-invalid @enderror" id="nowDonor" name="nowDonor" required>
          @error('nowDonor')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Pilih jadwal</h1>
        </div>
        <div class="col-12">
          <label for="tempat" class="form-label">Lokasi Donor</label>
          <select class="form-select" aria-label="Default select example" id="tempat">
            <option selected>Pilih Tempat</option>
            <option value="1">Jl. Embong Ploso No.7-15, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271</option>
            <option value="2">Jl. Sumatera No.71, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281</option>
            <option value="3">Jl. Karang Menjangan No.22, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60286</option>
            <option value="4">Jl. Tambaksari No.49, Tambaksari, Kec. Tambaksari, Kota SBY, Jawa Timur 60136</option>
            <option value="5">Jl. Jenderal Basuki Rachmat No.8 - 12, Kedungdoro, Kec. Tegalsari, Kota SBY, Jawa Timur 60261</option>
          </select>
        </div>
          <div class="col-12">
            <label for="nama" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required>
              @error('nama')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>  
              @enderror 
          </div>
          <div class="col-12">
            <label for="nama" class="form-label">Jam</label>
            <input type="date" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required>
              @error('nama')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>  
              @enderror 
          </div>
        <button type="submit" class="btn btn-outline-danger">Submit</button>
    </form>
  </div>


    
@endsection
