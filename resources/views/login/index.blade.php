@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-5">
    <main class="form-signin">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif


      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

    <h1 class="h3 mb-3 fw-normal">Please Login</h1>

  <form action="/login" method="post">
    @csrf

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('name') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{old('email')}}">
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Login</button>
  </form>
  <small class="d-block text-center">Belum register? <a href="/register">register</a></small>
</main>
  </div>
</div>
@endsection