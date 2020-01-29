<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SecuredFood</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="smartphone">
  <div class="content">
    
  <div class="navbar">
  <a class="navbar__menu-item" href="#"><img class="navbar__menu-item__logo" src="img/logo.png" alt="logo"></a>
  <a class="navbar__menu-item navbar__menu-item__search" href="#">Contactweg, Amsterdam</a>
  <div class="dropdown">
  <button class="dropbtn"><img class="navbar__menu-item__menu-logo" onclick="myFunction()" src="img/menu.png" alt="menu"></button>
  <div class="dropdown-content" id="myDropdown">
    <a href="#">Shopping-cart</a>
    <a href="#">Log-in</a>
  </div>
  </div> 
</div>

<div class="header">
    <img class="header__image" src="img/steak.jpg" alt="header image">
    <div class="header__image-div"></div>
</div>

<div class="category">
<span class="category-item active">All</span> 
<span class="category-item">Hamburgers</span> 
<span class="category-item">Fish</span> 
<span class="category-item">Chinese</span> 
<span class="category-item">Mexican</span> 
<span class="category-item">Italia</span>
</div>

<div class="meal-item">
</div>
    
  </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
