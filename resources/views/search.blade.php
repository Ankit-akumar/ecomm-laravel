@extends('master')
@section('content')

<div class="custom-product">
    <!-- Trending -->
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h3>Results</h3>
            @foreach($products as $item)
            <div class="searched-item">
              <a href="detail/{{$item['id']}}">
                <img style="height: 100px;" src="{{$item['gallery']}}" alt="Product">
                <div>
                  <h2 style="color: #74898b;">{{$item['name']}}</h2>
                  <h5 style="color: #74898b;">{{$item['discription']}}</h5>
                </div>
              </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- !Trending -->
</div>
@endsection