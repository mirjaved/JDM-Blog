@extends('index')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')"></div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')"></div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')"></div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>

<div class="container mt-4 pt-4">    
    <div class="row">
        @if(count($posts) >= 1)
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                <h3><img src="/storage/cover_images/{{ $post->cover_image }}" alt="Image" class="post_img_size"></h3>
                    <h4><a href="/posts/{{ $post->id }}" class="text-dark">{{ $post->title }}</a></h4>
                    <small>Published: {{ $post->created_at->format('d F, Y') }}</small>                    
                    <p class="mt-2">{{ substr($post->description, 0,  260) }}...</p>
                    <p><a class="btn btn-primary" href="/posts/{{ $post->id }}" role="button">View details &raquo;</a></p>
                </div>
            @endforeach
        @endif      
    </div>
  </div> <!-- /container -->

@endsection