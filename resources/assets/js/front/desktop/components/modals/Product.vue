<template>
      <div class="modal fade" id="product" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="row">
          <div class="col-auto f-product-image">
            <div class="f-product-image-inner">
              <img class="f-product-img" src="http://dostavka.loc/img/001.jpg" alt="">
            </div>
          </div>
          <div class="col f-product-content">
            <div class="f-product-content-inner">
             
              <h1 class="title f-product-title">{{product.name}}, 2,6%</h1>
              <div class="f-product-segment"><a href="/">Продукты</a> / <a href="/">Молочные продукты</a></div>

              
              <div class="f-product-quantity">{{product.new_price}} сум за 1 шт</div>
              <div class="f-product-price">
                <div class="f-product-price-new">{{product.new_price}} сум</div>
                <div class="f-product-price-old"></div>
              </div>
              <div class="row mt-auto">
                <div class="col">
                  <div class="counter-widget input-group">
                    <div class="input-group-prepend"><button class="btn btn-outline-red" type="button" disabled=""><i class="icon">clear</i></button></div>
                    <input class="form-control" value="1 шт" disabled="" type="text">
                    <div class="input-group-append"><button class="btn btn-outline-green" type="button"><i class="icon">add</i></button></div>
                  </div>
                </div>
                <div class="col">
                  <button class="btn btn-block btn-green">Добавить в корзину</button>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</template>
<script>
export default {
  props: ["product"]
};
</script>
