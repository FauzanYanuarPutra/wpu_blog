@extends('layouts/main')

@section('container')

    <h1>{{ $title }}</h1>
    <div class="container">
      <div class="row">
    @foreach ($categories as $category)

  
        <div class="col-md-4">
          <a href="/blog?category={{ $category->slug }}" class="card text-bg-dark">
            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
            <div class="card-img-overlay d-flex justify-content-center align-items-center p-0 opacity-50">
              <h5 class="card-title bg-black flex-fill text-center p-3 fs-3 ">{{ $category->name}}</h5>
            </div>
          </a>
        </div>
      

   
    @endforeach
      </div>
    </div>


@endsection


