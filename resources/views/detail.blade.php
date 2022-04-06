@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="product">
        </div>
        <div class="col-sm-6">
            <h2>{{$product['name']}}</h2>
            <h3>$ {{$product['price']}} /-</h3>
            <br>
            <h4>Category : {{$product['category']}}</h4>
            <br>
            <h4>Specifications :<br> {{$product['discription']}}</h4>
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button style="margin: 10px;" class="btn btn-primary">Add to Cart</button>
            </form>
            <button style="margin-left: 10px;" class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection