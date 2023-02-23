@extends('layouts/main')

@section('container')
      
  <h1>Halaman About</h1>
  <h4>{{  $name; }}</h4>
  <h4>{{  $email; }}</h4>
  <img src="img/{{  $image; }}" alt="{{  $name; }}" width="200">

@endsection
