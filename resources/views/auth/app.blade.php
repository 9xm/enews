
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0"-->
    <title>@yield('title')</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('css/signin.css?t='.time())}}" rel="stylesheet">

    <script src="{{asset('js/jquery-3.7.0.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</head>
<body class="text-center">
    @yield('content')
</body>
</html>