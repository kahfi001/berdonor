@extends('layouts.main')

@section('container')

  <h1>Riwayat</h1>
  @foreach ($donor as $donor)
  <table class="table table-striped table-sm">
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
@endsection