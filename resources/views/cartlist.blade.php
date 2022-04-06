@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3 style="margin-bottom: 20px;">Your Cart</h3>
            <a href="ordernow" class="btn btn-success" style="margin-bottom: 20px;">Order Now</a>
            @foreach($products as $item)
            <div class="row cart-item cart-list-divider">
              <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                  <img style="height: 100px;" src="{{$item->gallery}}" alt="Product">
                </a>
              </div>
              <div class="col-sm-6">
                  <div>
                    <h3 style="color: #74898b;">{{$item->name}}</h3>
                    <h5 style="color: #74898b;">{{$item->discription}}</h5>
                  </div>
              </div>
              <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" style="margin-top: 40px;" class="btn btn-danger">Remove from cart</a>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection