<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiniworld | @yield('title')</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('library/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('library/OwlCarousel2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">


    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">



    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('library/jquery/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('library/OwlCarousel2/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jssor.slider-27.5.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/vu.css')}}">
    <link rel="stylesheet" href="{{asset('css/right.css')}}">
    <link rel="stylesheet" href="{{asset('css/member.css')}}">
    <link rel="stylesheet" href="{{asset('css/vetiniword.css')}}">
    <link rel="stylesheet" href="{{asset('css/ve.css')}}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{asset('css/chiTiet-km.css')}}">
    <link rel="stylesheet" href="{{asset('css/khuyen-mai.css')}}">
 

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tin_tini.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tin.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">



    @yield('css')

</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')
    


    


    
    
    
    <script src="{{ asset('library/jquery/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('library/OwlCarousel2/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jssor.slider-27.5.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="https://kit.fontawesome.com/d2f7a09671.js"></script>
    @yield('js')
</body>
</html>