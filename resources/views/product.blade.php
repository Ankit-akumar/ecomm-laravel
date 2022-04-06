@extends('master')
@section('content')

<div class="custom-product">

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach($products as $item)
          <div class="item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}" alt="Product">
              <div class="carousel-caption">
                <h3 style="color: #74898b;">{{$item['name']}}</h3>
                <p style="color: #74898b;">{{$item['discription']}}</p>
              </div>
            </a>
          </div>
          @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- !Carousel -->

    <!-- Trending -->
    <div class="trending-wrapper">
        <h2>Trending</h2>
        @foreach($products as $item)
        <div class="trending-item">
          <a href="detail/{{$item['id']}}">
            <img style="height: 100px;" src="{{$item['gallery']}}" alt="Product">
            <div class="">
              <h3 style="color: #74898b;">{{$item['name']}}</h3>
            </div>
          </a>
        </div>
        @endforeach
        </div>
    <!-- !Trending -->
</div>
@endsection