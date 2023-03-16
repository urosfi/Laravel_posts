<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Compiled and minified JavaScript -->
            
    <title>@yield('title')</title>
</head>
<body>
    @include('navbar')
    @if (Session::get('updated'))
    <strong class="red-text right yellow">{{Session::get('updated')}}</strong>
        
    @endif
    @if (Session::get('store_mess'))
    <strong class="red-text right yellow">{{Session::get('store_mess')}}</strong>
    @endif
    @yield('main')
    @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>