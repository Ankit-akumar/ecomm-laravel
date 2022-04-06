@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3 style="margin-bottom: 20px;">Your Orders</h3>
            @foreach($orders as $item)
            <div class="row cart-item cart-list-divider">
              <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                  <img style="height: 100px;" src="{{$item->gallery}}" alt="Order">
                </a>
              </div>
              <div class="col-sm-6">
                  <div>
                    <h3 style="color: #74898b;">{{$item->name}}</h3>
                    <h5>Payment Status : {{$item->payment_status}}</h5>
                    <h5>Payment Method : {{$item->payment_method}}</h5>
                    <h5>Deliver At : {{$item->address}}</h5>
                    <h5>Delivery Status : {{$item->status}}</h5>
                  </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection