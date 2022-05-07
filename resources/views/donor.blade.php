@extends('layouts.main')

@section('container')
  <div class="row flex-lg-row-reverse align-items-center g-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="img/ilustrationdonor.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h2 class="text-bold">Buku panduan donor darah</h2>
      <p class="lead">Berikut adalah Buku Panduan Website Berdonor. <br>
        Silahkan Download File nya dibawah.</p>
      <div class="d-grid gap-2 ">
        <button class="btn btn-outline-danger" type="submit" width="max">Download</button>
      </div>
    </div>
  </div>
  <div class="row flex-lg-row align-items-center g-5  ">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="img/ilustrationdonor.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
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
      <div class="d-grid gap-2">
        <button class="btn btn-outline-danger" type="submit">Donor Sekarang</button>
      </div>
    </div>
  </div>
@endsection