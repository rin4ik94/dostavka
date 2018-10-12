<template>
    <div class="cart-card">
  <div class="container">
    <div class="row">
      <div class="col-auto">
        <a class="btn btn-link" href="/cart.php">
          <i class="icon">shopping_cart</i>
          <span class="text">Корзина</span>
          <span class="badge badge-danger">1</span>
        </a>
      </div>
      <div class="col cart-card-center">
        <div class="item">Магазин: <a href="/">Makro</a></div>
        <div class="item">Товаров в корзине 3</div>
        <div class="item">На сумму 2 500 сум</div>
      </div>
      <div class="col-auto">
        <router-link class="btn btn-green" :to="{name:'cart'}">Оформить заказ</router-link>
      </div>
    </div>
  </div>
</div>
</template>
