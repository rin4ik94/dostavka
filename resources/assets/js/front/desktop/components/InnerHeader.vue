<template>
    <div class="partners-intro">
    <div class="container">
      <h1 class="title intro-title">{{ $t("header.title") }}</h1>
      <div class="row">
        <div class="col-4 intro-item">
          <div class="intro-item-icon">
            <div class="icon-number">1</div>
            <div class="icon-shadow"><i class="icon">store</i></div>
          </div>
          <div class="intro-item-text">{{$t("header.step1")}}</div>
        </div>
        <div class="col-4 intro-item">
          <div class="intro-item-icon">
            <div class="icon-number">2</div>
            <div class="icon-shadow"><i class="icon">shopping_cart</i></div>
          </div>
          <div class="intro-item-text">{{$t("header.step2")}}</div>
        </div>
        <div class="col-4 intro-item">
          <div class="intro-item-icon">
            <div class="icon-number">3</div>
            <div class="icon-shadow"><i class="icon">local_shipping</i></div>
          </div>
          <div class="intro-item-text">{{$t("header.step3")}}</div>
        </div>
      </div> 
    </div>
  </div>
</template>
