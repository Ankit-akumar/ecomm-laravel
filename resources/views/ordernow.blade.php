@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <h3>Your Order</h3>
    <!-- Table -->
    <table class="table table-hover">
        <tbody>
          <tr>
            <td>Total</td>
            <td>$ {{$total}}</td>
          </tr>
          <tr>
            <td>Tax (includes GST)</td>
            <td>$ 0.5</td>
          </tr>
          <tr>
            <td>Delivery</td>
            <td>$ 2</td>
          </tr>
          <tr>
            <td>You Pay</td>
            <td>$ {{$total + 2.5}}</td>
          </tr>
        </tbody>
    </table>
    <!-- !Table -->
    <br>
    <!-- form -->
    <div>
    <form action="/orderplace" method="POST">
      @csrf
        <div class="form-group">
            <textarea name="address" placeholder="Enter delivery address" class="form-control"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label id="pay-method" for="pwd">Payment Method</label>
            <input type="radio" value="UPI" name="payment"><span id="pay-method">UPI</span>
            <input type="radio" value="Net Banking" name="payment"><span id="pay-method">Net Banking</span>
            <input type="radio" value="EMI" name="payment"><span id="pay-method">EMI</span>
            <input type="radio" value="Cash on Delivery" name="payment"><span id="pay-method">Cash on Delivery</span>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Order Now</button>
    </form>
    </div>
    <!-- !form -->
    </div>
</div>

@endsection