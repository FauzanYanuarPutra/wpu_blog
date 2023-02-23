
@extends('layouts/main')

@section('container')

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>{{$post->title}}</h1>
          <p class=" py-2">By. <a href="/blog?author={{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

          @if ($post->image)
          <div style="max-height: 350px; overflow:hidden;">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{ $post->category->name }}"  class="pt-1 pb-4 img-fluid mt-3">
          </div>
          @else
          <img src="https://source.unsplash.com/1400x500?{{ $post->category->name }}" alt="{{ $post->category->name }}"  class="pt-1 pb-4 img-fluid">

          @endif


          <p class="fs-5">{!! $post->body !!}</p>
        
          <a href="/blog" class="d-block text-decoration-none">Back to Blog</a>
        </div>
      </div>
    </div>



@endsection

