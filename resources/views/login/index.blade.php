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
    <main class="form-signin">
      <img class="rounded mx-auto d-block" src="img/logo.png" alt="">
      <h5 class=" mb-3 text-center">Please sign in</h5>
      <form>    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      </form>
    </main>
    <small class="d-block text-center">
      Belum Punya Akun? <a href="register">Daftar Sekarang</a> 
    </small>
  </div>
</div>

@endsection