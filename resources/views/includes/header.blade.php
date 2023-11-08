<header class="container-fluid mt-2">
<div style="height: 100px; display: flex; justify-content: center; align-items: center;">
<a class="justify-content-center" href="{{ url('/') }}">
    <img class="img-fluid logoimg" src="{{ asset('images/sushilogo.png') }}">
</a>
</div>

<style>
    .topbg {
    background: url(/images/bgindex2.png);
    background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    }
    .botbg {
    background: url(/images/bottombg.jpg);
    background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    }
    .bgprod {
    position: relative;
    background-image: url(/images/fond_bg.png);
    background-size: cover;
    background-position: center;
    min-height: 200px;
}
    </style>
<div class="navbar" id="navbar">
    <div class="hamburger" id="hamburger" onclick="toggleMenu()">
      <div class="bar"></div>
      <div class="bar"></div>   
      <div class="bar"></div>
    </div>
    <div class="">
        <a href="{{ route('account') }}" class="myicon">
            <!-- SVG code -->
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill: var(--primary-color)}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
        </a>
        <a href="{{ route('cart') }}" class="myicon">
            <!-- SVG code -->
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill: var(--primary-color)}</style><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
        </a>
    </div>
    <ul class="menu" id="menu">
      <li><a href="{{ route('nos-restaurants') }}">Nos Restaurants</a></li>
      <li><a href="{{ asset('menu-belfort.pdf') }}" target="_blank">La carte</a></li>
      <li><a href="{{ route('loyaute') }}">Fidélité</a></li>
      <li><a href="{{ route('recrutment') }}">Recrutement</a></li>
      <li><a href="{{ route('sushi-experience') }}"><img src="{{ asset('images/explogo.png') }}" class="img-fluid w-100"></a></li>
    </ul>
</div>
<section id="content" class="container-fluid" style="margin-top: 60px; margin-bottom: 60px; min-height: 800px;">
    