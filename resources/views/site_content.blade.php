@extends('master.master')


@section('content')

<section class="all">

<header>


    <nav class="main-nav">
    <div class="logo">
        <img src="{{'pictures/logo4.png'}}" alt="logo picture" class="logo-pic">

    </div>

    <div class="hamburger-menu">
        <span class="bar"></span>
    </div>

    <ul class="nav-list">

        <li class="nav-item">
            <a class="nav-link" href="{{route('ordinacija-Kovačević-Đaković')}}">Usluge</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('ordinacija-Kovačević-Đaković')}}">Doktorica</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('ordinacija-Kovačević-Đaković')}}">Iskustva pacijenata</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="{{route('ordinacija-Kovačević-Đaković')}}">Kontakt</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{route('ordinacija-Kovačević-Đaković')}}">Lokacija</a>
            </li>
    </ul>
</nav>
</header>


<section class='hero'>

<div class="hero-clipped">
<div class="hero-textbox">
    <h1 class="main-heading">DJAKOVIĆ KOVAČEVIĆ</h1>
    <h2 class="sub-heading">Profesinalno, stručno i pristupačno</h2>
<a href="{{route('ordinacija-Kovačević-Đaković')}}" class="cta-btn">Saznajte više</a>
</div>
</div>
</section>



</section>
@endsection




