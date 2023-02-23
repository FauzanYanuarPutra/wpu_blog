@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-5">
    <main class="form-regis">
    <h1 class="h3 mb-3 fw-normal">Registrasi</h1>

  <form action="/register" method="post">
    @csrf
    <div class="form-floating">
      <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name" placeholder="nama" value="{{old('name')}}" required>
      <label for="name">Nama</label>
      @error('name')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"  id="username" placeholder="username" value="{{old('username')}}" required>
      <label for="username">Username</label>
      @error('username')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" value="{{old('email')}}" required>
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"  id="password" placeholder="Password"  required>
      <label for="password">Password</label>
      @error('password')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
      @enderror
    </div>


    <button class="w-100 btn btn-lg btn-primary mb-3 mt-3" type="submit">Registrasi</button>
  </form>
  <small class="d-block text-center">Sudah register? <a href="/login">Login</a></small>
</main>
  </div>
</div>
@endsection