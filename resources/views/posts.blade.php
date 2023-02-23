
@extends('layouts/main')

@section('container')

    <h1 class="pb-4 pt-4">{{ $title }}</h1>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="/blog">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category')}}">
          @endif
          @if (request('author'))
              <input type="hidden" name="author" value="{{ request('author')}}">
          @endif

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Cari</button>
          </div>
          
        </form>
      </div>
    </div>

    @if ($posts->count())
      <div class="card mb-3">
        @if ($posts[0]->image)
          <div style="max-height: 350px; overflow:hidden;">
            <img src="{{asset('storage/' . $posts[0]->image)}}" alt="{{ $posts[0]->category->name }}"  class="pt-1 pb-4 img-fluid mt-3">
          </div>
          @else
        <img src="https://source.unsplash.com/1400x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">

          @endif
        <div class="card-body">
          <h3 class="card-title">{{ $posts[0]->title }}</h3>
          <p>
            <small>By. <a href="/blog?author={{ $posts[0]->author->name }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}"  class="text-decoration-none"> {{ $posts[0]->category->name }}</a>
            {{$posts[0]->created_at->diffForHumans()}}
            </small>
          </p>

          <p class="card-text">{{ $posts[0]->excerpt }}</p>

          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
        </div>
      </div>

 
<div class="container">
  <div class=" d-flex flex-wrap justify-content-between">
    @foreach ($posts->skip(1) as $post)
    <div class="col-sm-4 p-2">
      <div class="card">
        <a href="/blog?category={{ $post->category->slug }}"  class="text-decoration-none">
        <div class="position-absolute mt-2 p-2 bg-primary  text-white">{{$post->category->name}}</div></a>
        @if ($post->image)
          <div style="max-height: 350px; overflow:hidden;">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{ $post->category->name }}"  class="pt-1 pb-4 img-fluid mt-3">
          </div>
          @else
        <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="...">

          @endif
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p>
            <small>By. <a href="/blog?author={{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a>
            {{$post->created_at->diffForHumans()}}
            </small>
          </p>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More...</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="px-4">
  {{$posts->links()}}
</div>
  

@else
<p class="fs-4 text-center mt-2">DATA TIDAK ADA</p>
@endif

@endsection

