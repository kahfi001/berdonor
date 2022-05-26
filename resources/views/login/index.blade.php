@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <main class="form-signin">
      <img class="rounded mx-auto d-block" src="img/logo.png" alt="">
      <h5 class=" mb-3 text-center">Please Login</h5>
      <form action="/login" method="post">
        @csrf    
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
    </main>
    <small class="d-block text-center mb-5">
      Belum Punya Akun? <a href="register">Daftar Sekarang</a> 
    </small>
  </div>
</div>

@endsection