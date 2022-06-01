@extends('layouts.main')


@section('container')
  <div class="row flex-lg-row-reverse align-items-center g-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="img/buku.png" class="d-block mx-lg-auto img-fluid mt-4" alt="Bootstrap Themes" width="400" height="300" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h2 class="text-bold">Buku panduan donor darah</h2>
      <p class="lead">Berikut adalah Buku Panduan Website Berdonor. <br>
        Silahkan Download File nya dibawah.</p>
      <div class="d-grid gap-2 ">
        <a href="https://drive.google.com/file/d/1sPPxpLRb-kJ97QQ4xeP_uRufhT0idZ5Y/preview" class="btn btn-outline-danger">Donwload</a>
      </div>
    </div>
  </div>
  <div class="row flex-lg-row align-items-center g-5 my-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <a href="/donor/create"><img src="img/donor.png" class="d-block mx-lg-auto img-fluid hover01" alt="" width="350"  loading="lazy"></a>
     
    </div>
    <div class="col-lg-6">
      <h2 class="text-bold">Persyaratan Donor Darah</h2>
      <ol>
        <li>Kondisi fisik harus dalam keadaan sehat, jasmani maupun rohani.</li>
        <li>Berusia 17 sampai dengan 65 tahun.</li>
        <li>Memiliki berat badan minimal 45 kilogram.</li>
        <li>Suhu tubuh 36,6-37,5 derajat Celcius.</li>
        <li>Tekanan darah sistole 100-170 dan diastole 70-100.</li>
        <li>Saat pemeriksaan, denyut nadi harus sekitar 50-100 kali per menit.</li>
        <li>Kadar hemoglobin 12,5 gr/dl s/d 17 gr/dl.</li>
        <li>	Jarak waktu donor darah terakhir minimal 3 bulan atau 12 minggu,
          jika sebelumnya sudah pernah menjadi pendonor darah.</li>
      </ol>
      <div class="d-grid gap-2 mb-5">
        <a href="/donor/create" class="btn btn-outline-danger">Donor Sekarang</a>
      </div>
    </div>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success my-5" role="alert">
    {{ session('success') }}
  </div> 
  @endif

@if ($donor->count())

@else
<p class="text-center fs-4 m-4">Tidak ada data</p>
    
@endif
@foreach ($donor as $donor)
  <table class="table table-striped table-sm mt-4">
    <thead>
      <tr>
        <th scope="col">Identitas</th>
        <th scope="col">Keterangan</th>
      </tr>
    </thead>
    <tbody> 
        <tr>
          <td>Nama</td>
          <td>{{ $donor->nama }}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td> {{ $donor->alamat }}</td>
        </tr>
        <tr>
          <td>No Hp</td>
          <td> {{ $donor->tlp }}</td>
        </tr>
        <tr>
          <td>Tempat</td>
          <td> {{ $donor->tempat }}</td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td> {{ $donor->tgl_lahir }}</td>
        </tr>
        <tr>
          <td>jenis Kelamin</td>
          <td> {{ $donor->jk }}</td>
        </tr>
        <tr>
          <td>Donor terakhir</td>
          <td> {{ $donor->donor_terakhir }}</td>
        </tr>
        <tr>
          <td>Donor Sekarang</td>
          <td> {{ $donor->skrdonor }}</td>
        </tr>
        <tr>
          <td>Lokasi Donor</td>
          <td> {{ $donor->lokasi_donor }}</td>
        </tr>
        <tr>
          <td>Tgl Donor</td>
          <td> {{ $donor->tgl_donor }}</td>
        </tr>
        <tr>
          <td>jam</td>
          <td> {{ $donor->jam }}</td>
        </tr>
    </tbody>
  </table>
    @endforeach
  <br>
@endsection