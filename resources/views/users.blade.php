<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Learn & Share</title>

        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/navbar-fixed-top.css') !!}
        {!! Html::style('css/sticky-footer-navbar.css') !!}
        {!! Html::style('css/signin.css') !!}




  </head>

  <body>

@include('users.nav')
    <!-- Fixed navbar -->

   @yield('content')

@include('users.footer')
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/ie-emulation-modes-warning.js') !!}
    {{--<script src="../jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="ie-emulation-modes-warning.js"></script>
--}}
  </body>
</html>
