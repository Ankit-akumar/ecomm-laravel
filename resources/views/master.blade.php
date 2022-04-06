<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WireCart</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- cdns -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body>
    {{ View::make('header')}}
    @yield('content')
    <br><br>
    {{ View::make('footer')}}
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-product{
        height: 600px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 20px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important;
    }
    .cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    #pay-method{
        margin-right: 20px;
    }
    .navbar-default{
        background-color: #22577E;
        color: white;
    }
    /* footer */
    @media (min-width: 1200px) {
        .container {
            width: 1248px !important
        }
    }

    body {
        overflow-x: hidden
    }

    .middleTop {
        margin: 0 auto;
        padding: 50px 0;
        max-width: 1600px;
        min-width: 1024px;
        background-color: #22577E
    }

    .middle-heading {
        font-family: "font-bold";
        font-size: 14px;
        color: #fff;
        margin-left: 38px;
        padding-bottom: 15px;
        text-transform: uppercase
    }

    .middle-content {
        font-size: 12px;
        color: #777 !important;
        list-style-type: none;
        max-width: 210px
    }

    .middleContent-footer .middleTop div {
        box-sizing: border-box
    }

    .middleBottom {
        background-color: #22577E;
        text-align: center;
        border-top: 1px solid #e2e2e2;
        border-bottom: 1px solid #e2e2e2;
        padding: 12px 0
    }

    .middleBottomFooter {
        text-transform: uppercase;
        font-size: 14px;
        color: #344c55;
        text-align: left;
        background-color: #000
    }

    .underLineOnHover {
        color: #fff
    }

    .bottomfooter {
        background-color: #22577E
    }

    .copyright {
        color: #fff
    }

    .address {
        color: #fff
    }
    /* !footer */
</style>
</html>