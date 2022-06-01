@extends('layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Isi Identitas</h1>
  </div>

  <div class="col-lg-8">
    <form action="/donor" method="post" enctype="multipart/form-data" class="row g-3">
      @csrf
        <div class="col-12">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">
                {{ $message }}
                </div>  
            @enderror 
        </div>
        <div class="col-md-8">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat') }}">
          @error('alamat')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-md-4">
          <label for="tlp" class="form-label">No telpon</label>
          <input type="number" class="form-control @error('tlp') is-invalid @enderror" id="tlp" name="tlp" required value="{{ old('tlp') }}">
          @error('tlp')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-md-4  ">
          <label for="tempat" class="form-label">Tempat</label>
          <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat" required value="{{ old('tempat') }}">
          @error('tempat')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-md-8">
          <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lahir') }}">
          @error('tgl_lahir')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-12">
          <label for="jk" class="form-label">Jenis Kelamin</label>
          <select class="form-select" name="jk" id="jk">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="donor_terakhir" class="form-label">Tgl Donor Terakhir</label>
          <input type="date" class="form-control @error('donor_terakhir') is-invalid @enderror" id="donor_terakhir" name="donor_terakhir" required value="{{ old('donor_terakhir') }}">
          @error('donor_terakhir')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="col-md-8">
          <label for="skrdonor" class="form-label">Sekarang Donor ke</label>
          <input type="text" class="form-control @error('skrdonor') is-invalid @enderror" id="skrdonor" name="skrdonor" required value="{{ old('skrdonor') }}">
          @error('skrdonor')
              <div class="invalid-feedback">
              {{ $message }}
              </div>  
          @enderror
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Pilih jadwal</h1>
        </div>
        <div class="col-12">
          <label for="lokasi_donor" class="form-label">Lokasi Donor</label>
          <select class="form-select" name="lokasi_donor" id="lokasi_donor" >
            <option selected>Pilih Tempat</option>
            <option value="Jl. Embong Ploso No.7-15, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271">Jl. Embong Ploso No.7-15, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271</option>
            <option value="Jl. Sumatera No.71, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281">Jl. Sumatera No.71, Gubeng, Kec. Gubeng, Kota SBY, Jawa Timur 60281</option>
            <option value="Jl. Karang Menjangan No.22, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60286">Jl. Karang Menjangan No.22, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60286</option>
            <option value="Jl. Tambaksari No.49, Tambaksari, Kec. Tambaksari, Kota SBY, Jawa Timur 60136">Jl. Tambaksari No.49, Tambaksari, Kec. Tambaksari, Kota SBY, Jawa Timur 60136</option>
            <option value="Jl. Jenderal Basuki Rachmat No.8 - 12, Kedungdoro, Kec. Tegalsari, Kota SBY, Jawa Timur 60261">Jl. Jenderal Basuki Rachmat No.8 - 12, Kedungdoro, Kec. Tegalsari, Kota SBY, Jawa Timur 60261</option>
          </select>
        </div>
        <div class="col-12">
            <label for="tgl_donor" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tgl_donor') is-invalid @enderror" id="tgl_donor" name="tgl_donor" required value="{{ old('tgl_donor') }}">
              @error('tgl_donor')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>  
              @enderror 
        </div>
        <div class="col-12">
            <label for="jam" class="form-label">Jam</label>
            <input type="time" class="form-control @error('jam') is-invalid @enderror" id="jam" name="jam" required value="{{ old('jam') }}">
              @error('jam')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>  
              @enderror 
        </div>
        <button type="submit" class="btn btn-outline-danger">Submit</button>
    </form>
  </div>


    
@endsection
