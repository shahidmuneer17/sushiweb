<header class="container-fluid mt-2">
<div style="height: 100px; display: flex; justify-content: center; align-items: center;">
<a class="justify-content-center" href="{{ url('/') }}">
    <img class="img-fluid logoimg" src="{{ asset('images/sushilogo.png') }}">
</a>
</div>


<div class="navbar" id="navbar">
    <div class="hamburger" id="hamburger" onclick="toggleMenu()">
      <div class="bar"></div>
      <div class="bar"></div>   
      <div class="bar"></div>
    </div>
    <div class="">
        <a href="{{ route('account') }}" class="myicon">
            <!-- SVG code -->
        </a>
        <a href="{{ route('cart') }}" class="myicon">
            <!-- SVG code -->
        </a>
    </div>
    <ul class="menu" id="menu">
      <li><a href="{{ route('restaurants') }}">Nos Restaurants</a></li>
      <li><a href="{{ asset('menu-belfort.pdf') }}" target="_blank">La carte</a></li>
      <li><a href="{{ route('loyalty') }}">Fidélité</a></li>
      <li><a href="{{ route('recruitment') }}">Recrutement</a></li>
      <li><a href="{{ route('sushiexperience') }}"><img src="{{ asset('images/explogo.png') }}" class="img-fluid w-100"></a></li>
    </ul>
</div>
<section id="content" class="container-fluid" style="margin-top: 60px; margin-bottom: 60px; min-height: 800px;">
    