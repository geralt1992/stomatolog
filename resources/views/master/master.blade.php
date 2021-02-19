<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Stomatologija Đaković Kovačević</title>


     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
     <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>


     <!-- Styles  CSS-->
     <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css"/>


     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="//db.onlinewebfonts.com/c/0923ee644c97a87d70269aa80a6f1e79?family=The+Historia+Demo" rel="stylesheet" type="text/css"/>


     <!-- FONTOVI -->
    <link rel="stylesheet" href="https://use:fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


     <style>

        /*-----------GENERAL----------------*/
        .hero{
        width: 100%;
        height: 100vh;
        background-image: url('{{asset('pictures/landing_pic1.jpg')}}');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        position: relative;
        }
    </style>
</head>


<body>

    <div class="container">
        @if ($errors->any())
                <div class="alert alert-danger">
                     <ul>
                         @foreach ($errors->all() as $error)
                             <li>{{$error}}</li>
                        @endforeach
                     </ul>
        @endif
    </div>

    <div class="container">
        @if (session()->has('success'))
             <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
    </div>

@yield('content')

<script src="https://use.fontawesome.com/releases/v5.12.0/js/all.js" data-auto-replace-svg="nest"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

<script>
    const mainNav = document.querySelector('.main-nav');
    const hamburgerMenu = document.querySelector('.hamburger-menu');

    hamburgerMenu.addEventListener('click' , function(){
        mainNav.classList.toggle('open');
    });



    gsap.fromTo('.hero-clipped' , {scaleX: 0},  {duration: 1, scaleX: 1});
    gsap.fromTo('.logo' , {x: -200 , opacity: 0} ,  {duration: 1, delay: .5, x: 0, opacity:1});
    gsap.fromTo('.hamburger-menu' , {x: 200 , opacity: 0} ,  {duration: 1, delay: .8, x: 0, opacity:1});
    gsap.fromTo('.hero-textbox' , {yPercent: 40 , opacity: 0} ,  {duration: 1, delay: 1.3, yPercent: -50, opacity:1});

</script>


</body>
</html>
