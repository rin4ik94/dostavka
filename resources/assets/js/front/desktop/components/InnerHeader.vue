<template>
    <div class="partners-intro">
    <div class="container">
      <h1 class="title intro-title">{{ $t("header.title") }}</h1>
      <!-- <div class="row">
        <div class="col-4 intro-item">
          <div class="intro-item-icon">
            <div class="icon-number">1</div>
            <div class="icon-shadow"><i class="icon">store</i></div>
          </div>
          <div class="intro-item-text">Выбирайте свой любимый магазин в своем регионе</div>
        </div>
        <div class="col-4 intro-item">
          <div class="intro-item-icon">
            <div class="icon-number">2</div>
            <div class="icon-shadow"><i class="icon">shopping_cart</i></div>
          </div>
          <div class="intro-item-text">Собирайте нужные продукты в корзину и оформляйте заказ</div>
        </div>
        <div class="col-4 intro-item">
          <div class="intro-item-icon">
            <div class="icon-number">3</div>
            <div class="icon-shadow"><i class="icon">local_shipping</i></div>
          </div>
          <div class="intro-item-text">Наш курьер доставит Ваш заказ по указанному адресу и времени</div>
        </div>
      </div> -->
      <div class="row">    
        <div class="col-4 intro-item">
         <div class="intro-item-icon">
          <!-- <div class="icon-number">1</div> -->
           <div class="icon-shadow">
              <i class="icon">
              <img src="/img/store.png" >
           </i>
           </div>
           </div>
          <div class="intro-item-text">{{$t("header.step1")}}</div>
        </div>
        <div class="col-4 intro-item">
          <div class="intro-item-icon">
          <!-- <div class="icon-number">2</div> -->
           <div class="icon-shadow">
             <i class="icon">
                <img src="/img/cart.png" >
            </i>
            </div>
            </div>
          <div class="intro-item-text">{{$t("header.step2")}}</div>
        </div>
        
        <div class="col-4 intro-item">
          
          <div class="intro-item-icon">
            <!-- <div class="icon-number">3</div> -->
           <div class="icon-shadow">
           <i class="icon">
            <img src="/img/courier.png"  >

             </i> 
          </div>
          </div>
          <div class="intro-item-text">{{$t("header.step3")}}</div>
        </div>
      </div>
    </div>
  </div>
</template>
