<link rel="stylesheet" href="{{ asset('css/nav.css') }}">

<div class="navbar">
<a class="navbar__menu-item" href="#"><img class="navbar__menu-item__logo" src="{{ asset('/img/logo.png') }}" alt="logo"></a>
    <a class="navbar__menu-item navbar__menu-item__search" href="#">Contactweg, Amsterdam</a>
    <div class="dropdown">
    <button class="dropbtn"><img class="navbar__menu-item__menu-logo" onclick="myFunction()" src="{{ asset('/img/menu.png') }}" alt="menu"></button>
    <div class="dropdown-content" id="myDropdown">
      <a href="#">Shopping-cart</a>
      <a href="#">Log-in</a>
    </div>
    </div> 
  </div>