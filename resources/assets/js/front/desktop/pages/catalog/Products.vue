<template>
<div>
    <ul class="products">
              <!-- <li class="product selected">
                <div class="product-inner">
                <a href="/storename/products/id" data-toggle="modal" data-target="#product">
                  <div class="product-image"><img src="/desktop/img/001.jpg"></div>
                  <div class="product-title">Carefree Large ежедневки 2.5к 36шт dasdas dasd asd asd asd asdasdasdas dasd asdasdasdasdasdas dasd asdasd asd</div>
                  </a>
                  <div class="product-footer">
                    <div class="counter-widget input-group">
                      <div class="input-group-prepend"><button class="btn btn-outline-red" type="button"><i class="icon">clear</i></button></div>
                      <input class="form-control" type="text" value="1 шт" disabled>
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button"><i class="icon">add</i></button></div>
                    </div>
                  </div>
                </div>
              </li>  -->
              <li class="product" :key="product.id" v-for="product in products">
        <div class="product-inner">
        <a href="/storename/products/id" @click="showModal(product)" data-toggle="modal" data-target="#product">
            <div class="product-discount">-10%</div>
            <div class="product-image"><img :src="product.image"></div>
            <div class="product-title">{{product.name}} 2.5к 36шт dasdas dasd asd asd asd asdasdasdas dasd asdasdasdasdasdas dasd asdasd asd</div>
            </a>
            <div class="product-footer">
            <div class="product-price">
                <div class="product-price-new">{{product.new_price | toCurrency }} сум</div><div class="product-quantity">за 1 кг.</div>
            </div>
            <button class="btn btn-green product-add-button" type="submit">В корзину</button>
            </div>
        </div>
        </li> 
      <ProductModal :product="product"/>
    </ul> 
    </div>

</template>
<script>
export default {
  props: ["products", "sortBy"],
  data() {
    return {
      product: ""
    };
  },
  watch: {
    sortBy(sortBy) {}
  },
  methods: {
    showModal(product) {
      this.product = product;
    }
  }
};
</script>
