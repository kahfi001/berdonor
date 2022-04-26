@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-registration">
      <img class="rounded mx-auto d-block" src="img/logo.png" alt="">
      <h5 class=" mb-3 text-center">Form Registrasi</h5>
      <form action="/register" method="post">  
        @csrf  
        <div class="form-floating">
          <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg mt-3 btn-primary" type="submit">Registrasi</button>
      </form>
    </main>
    <small class="d-block text-center">
      Sudah Punya Akun? <a href="login">Login Sekarang</a> 
    </small>
  </div>
</div>

@endsection