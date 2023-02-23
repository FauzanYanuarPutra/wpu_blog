@extends('dashboard.layouts.main')


@section('container')

<div class="container">
      <div class="row my-3">
        <div class="col-lg-8">
          <h1>{{$post->title}}</h1>

          <a href="/dashboard/posts" class="btn btn-success">Back to all my posts</a>
          <a href="#" class="btn btn-warning">Edit</a>
          <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>

          @if ($post->image)
          <div style="max-height: 350px; overflow:hidden;">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{ $post->category->name }}"  class="pt-1 pb-4 img-fluid mt-3">
          </div>
          @else
          <img src="https://source.unsplash.com/1400x500?{{ $post->category->name }}" alt="{{ $post->category->name }}"  class="pt-1 pb-4 img-fluid mt-3">
          @endif

          <p class="fs-5">{!! $post->body !!}</p>
        
        </div>
      </div>
    </div>

@endsection