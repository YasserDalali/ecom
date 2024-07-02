<?php include 'dependencies.html'; 
include "../BACKEND/MVC/controller.php";
$c = new Controller();
session_start();?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position:sticky; top:0; z-index: 2">
  <a class="navbar-brand" href="#">Amazon</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Shop by Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Today's Deals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Customer Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gift Cards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sell</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <i id="cart" class="fas fa-cart-shopping text-white p-3"></i>

      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<aside style="position:fixed; right:0; top:0; height: 100%; z-index:3; background-color: white; padding:4rem; border-radius: 1rem 0 0 1rem;" class="d-none">
  <h1>CART</h1>
  <table class="table">
    <thead>
      <th>product</th>
      <th>amount</th>
      <th>price</th>
      <th>sum</th>
    </thead>
    <tbody>
        
    </tbody>
  </table>
</aside>

<script>
  cart = document.getElementById('cart')
  aside = document.getElementsByTagName('aside')[0]
  
  cart.addEventListener('click', toggleCart)

  function toggleCart() {
    aside.classList.toggle('d-none');

  if (!aside.classList.contains('d-none')) {
          document.addEventListener('click', handleClickOutsideCart);
      }
  else {
          document.removeEventListener('click', handleClickOutsideCart);
      }
    };

function handleClickOutsideCart(event) {
    if (!aside.contains(event.target) && !cart.contains(event.target)) {
        aside.classList.add('d-none');
        document.removeEventListener('click', handleClickOutsideCart);
    }
}


</script>