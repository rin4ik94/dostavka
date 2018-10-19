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
              <img class="f-product-img" :src="product.image" alt="">
            </div>
          </div>
          <div class="col f-product-content">
            <div class="f-product-content-inner">
             
              <h1 class="title f-product-title">{{product.name}}, 2,6%</h1>
              <div class="f-product-segment"><a href="/">Продукты</a> / <a href="/">Молочные продукты</a></div>
              <div class="f-product-quantity">{{product.new_price | toCurrency}} сум за 1 шт</div>
              <div class="f-product-price">
                <div class="f-product-price-new">{{product.new_price | toCurrency}} сум</div>
                <div class="f-product-price-old"></div>
              </div>
              <div class="row mt-auto">
                <div class="col">
                  <div class="counter-widget input-group">
                     <div class="input-group-prepend" v-if="productInCart & quantity == 1"><button class="btn btn-outline-red" type="button" @click="removeFromCart"><i class="icon">clear</i></button></div>
                      <div class="input-group-prepend" v-if="quantity > 1"><button class="btn btn-outline-red" type="button" @click="decreaseQuantity"><i class="icon">remove</i></button></div>
                      <input class="form-control" type="text" :value="`${quantity} ${product.measure}`" disabled>
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button" @click="increaseQuantity"><i class="icon">add</i></button></div>
                  </div>
                </div>
                <div class="col">
                  <button v-if="!productInCart" class="btn btn-block btn-green">Добавить в корзину</button>
                  <button v-else class="btn btn-block btn-green">Готово</button>
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
import localforage from "localforage";
import { isEmpty } from "lodash";
export default {
  data() {
    return {
      product: "",
      productMenu: [],
      quantity: 1
    };
  },
  watch: {
    $route() {
      if (this.$route.params.product) {
        this.fetchProduct();
      }
    }
  },
  computed: {
    productInCart() {
      let item = this.productMenu.find(prod => {
        return prod.id == this.product.id;
      });
      return item ? true : false;
    }
  },
  methods: {
    removeFromCart() {
      let index = this.productMenu.findIndex(prod => {
        return prod.id == this.product.id;
      });
      this.productMenu.splice(index, 1);
      localforage.setItem("cart", this.productMenu);
      $("#product").modal("hide");
    },
    increaseQuantity() {
      this.quantity++;
    },
    decreaseQuantity() {
      this.quantity--;
    },
    fetchProduct() {
      axios
        .get(`/api/products/${this.$route.params.product}`)
        .then(response => {
          this.product = response.data.data;

          let l = this.productMenu.find(p => {
            return p.id == this.product.id;
          });
          if (l) {
            this.quantity = l.quantity;
          }
        });
    }
  },
  mounted() {
    if (this.$route.params.product) {
      this.fetchProduct();
    }
    localforage.getItem("cart").then(response => {
      if (!isEmpty(response)) {
        this.productMenu = response;
      }
    });
  }
};
</script>
