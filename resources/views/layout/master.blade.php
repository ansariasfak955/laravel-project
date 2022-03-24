<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="js/jquery.js"></script>
    <title>Document</title>
    @yield('styles')
</head>
<body>
<div class="container-fluid">
 @include('layout.header')
        
 @yield('main_content')

 @include('layout.footer')
</div>
</body>
</html>