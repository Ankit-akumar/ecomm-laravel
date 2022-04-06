<?php
  use App\Http\Controllers\ProductController;
  $total = 0;
  if(Session()->has('user')) {
    $total = ProductController::cartItem();
  }
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="color: #FAFFAF; font-weight: bold; font-size:30px" class="navbar-brand" href="/">WireCart</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a style="color: white; font-size:18px" href="/">Home</a></li>
        <li><a style="color: white; font-size:18px" href="/myorders">Orders</a></li>
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-success">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color: white; font-size:18px" href="/cartlist">Cart({{$total}})</a></li>
        @if(Session()->has('user'))
        <li class="dropdown">
          <a style="color: white; font-size:18px" class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session()->get('user')['name']}}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a style="color: white; font-size:18px; background-color:#22577E" href="/logout">Logout</a></li>
          </ul>
        </li>
        @else
        <li><a style="color: white; font-size:18px" href="/login">Login</a></li>
        <li><a style="color: white; font-size:18px" href="/register">Register</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>