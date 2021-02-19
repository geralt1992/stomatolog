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
     <link href="{{asset('css/main_2.css')}}" rel="stylesheet" type="text/css"/>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="//db.onlinewebfonts.com/c/0923ee644c97a87d70269aa80a6f1e79?family=The+Historia+Demo" rel="stylesheet" type="text/css"/>

     <!-- FONTOVI -->
    <link rel="stylesheet" href="https://use:fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <style>

  /*-----------GENERAL----------------*/

        body{
        overflow: auto;
        }

        .main-container{
        width: 100%;
        height:100vh;
        background-image: url('{{asset('pictures/landing_pic1.jpg')}}');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        position: relative;
        }

        .services{
        background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),  url('{{asset('pictures/landing_pic4.jpg')}}');
        background-attachment: fixed;
        background-size: cover;
        padding: 60px 0;
        }

        .hero-part_with_img{
        width: 60%;
        height: inherit;
        background-color: red;
        position: relative;
        top: 0;
        left: 0;
        clip-path: polygon(0% 0, 87% 0%, 67% 100%, 0% 100%);
        transform-origin: left;
        z-index: 20;
        overflow: auto;
        background-image: url('{{asset('pictures/doktorica.jpg')}}');
        background-position: center;
        background-size: cover;
        position: absolute;
        }

        .hero-clipped{
        width: 60%;
        height: inherit;
        background-color: #eee;
        position: absolute;
        top: 0;
        right: 0;
        /*transform-origin: right;*/
        clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
        transform-origin: right;
        z-index: 10;
        overflow: scroll;
        }

        .about-area{
        width: 100%;
        height:100vh;
        background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),  url('{{asset('pictures/landing_pic3.jpg')}}');
        background-attachment: fixed;
        background-size: cover;
        padding: 60px 0;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #ddd;
        margin: 0;
        padding: 0;
        }

        .contact{
        width: 100%;
        height:100vh;
        background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('pictures/landing_pic5.jpg')}}');
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        overflow: auto;
        }

        .swiper-container {
        width: 100%;
        height: 80vh;
        }

        .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 200px;
        height: 380px;
        background: #fff;
        background-color: rgba(0,0,0, 0);
        margin: 5rem;
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



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<script src="{{asset('js/main.js')}}" type="text/javascript"></script>


<!-- SWIPER -->
<script src="{{asset('js/swiper.min.js')}}"  type="text/javascript"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

</body>
</html>
