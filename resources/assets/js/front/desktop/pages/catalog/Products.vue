<template>
<div>
    <ul class="products"> 
              <li class="product" :key="product.id" v-for="product in products">
        <div class="product-inner">
        <router-link :to="{name: 'tp', params:{product : product.slug}}">
       
              <div class="product-discount" v-if="product.new_price < product.old_price">-{{getPersentage(product)}}%</div>
            <div class="product-image"><img :src="product.image"></div>
            <div class="product-title">{{product.name}} 2.5к 36шт dasdas dasd asd asd asd asdasdasdas dasd asdasdasdasdasdas dasd asdasd asd</div>
        </router-link>
        <div class="product-footer" v-if="productInCart(product)">
                    <div class="counter-widget input-group">
                      <div class="input-group-prepend" v-if="product.quantity == 1"><button class="btn btn-outline-red" type="button" @click="removeFromCart(product)"><i class="icon">clear</i></button></div>
                      <div class="input-group-prepend" v-else><button class="btn btn-outline-red" type="button" @click="decreaseQuantity(product)"><i class="icon">remove</i></button></div>
                      <input class="form-control" type="text" :value="product.quantity" disabled>
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button" @click="addToCart(product)"><i class="icon">add</i></button></div>
                    </div>
            </div>
            <div class="product-footer" v-else>
            <div class="product-price">
                <div class="product-price-new">{{product.new_price | toCurrency }} сумов</div><div class="product-quantity">за 1 кг.</div>
            </div>
            <button class="btn btn-green product-add-button" type="submit" @click="addToCart(product)">В корзину</button>
            </div>
            
        </div>
        </li> 
      <!-- <ProductModal :product="product"/> -->
    </ul> 
    </div>
</template>
<script>
import localforage from "localforage";
import { isEmpty } from "lodash";
import { mapActions, mapGetters } from "vuex";
export default {
  props: ["prods"],
  data() {
    return {
      product: "",
      productMenu: [],
      products: []
    };
  },
  watch: {
    prods: {
      immediate: true,
      handler(prods) {
        console.log(1);
        if (prods.length > 0) {
          this.products = prods;
          this.fetchProducts();
        }
        // Vue.nextTick(() => {
        //   if ($route.params.product) {
        //     $("#product").modal("show");
        //   }
        // });
      }
    }
  },
  computed: mapGetters({
    totalCart: "totalCart"
  }),
  methods: {
    ...mapActions({
      setCartAction: "setCart",
      setTotal: "setTotal"
    }),
    removeFromCart(product) {
      let item = this.productMenu.findIndex(prod => {
        return prod.id == product.id;
      });
      this.productMenu.splice(item, 1);
      this.cartState();
    },
    fetchProducts() {
      console.log(1);

      setTimeout(() => {
        let total = 0;
        localforage.getItem("cart").then(response => {
          if (!isEmpty(response)) {
            // console.log(response);
            this.productMenu = response;
            this.products.map((v, k) => {
              v.quantity = 1;
              // console.log(v);

              this.productMenu.map((l, o) => {
                if (v.id == l.id) {
                  //console.log(v);
                  total = total + v.new_price;
                  v.quantity = l.quantity;
                  Vue.set(this.products, k, v);
                  l = v;
                  Vue.set(this.productMenu, o, l);
                }
              });
            });
          }
        });
        this.setTotal(total);
        console.log(total);
      }, 0);
    },
    decreaseQuantity(product) {
      let index = this.productMenu.findIndex(prod => {
        return prod.id == product.id;
      });
      --product.quantity;
      Vue.set(this.productMenu, index, product);
      this.setCart();
    },
    showModal(product) {
      this.product = product;
    },
    getPersentage(product) {
      let value = product.old_price - product.new_price;
      return Math.round((value / product.old_price) * 100);
    },
    productInCart(product) {
      let item = this.productMenu.find(prod => {
        return prod.id == product.id;
      });
      return item ? true : false;
    },
    setCart() {
      let cart = [];
      let data = {
        id: "",
        quantity: 0
      };
      this.productMenu.map((value, key) => {
        data = {
          id: "",
          quantity: 0
        };
        if (value.id != data.id) {
          data.id = value.id;
          data.quantity = value.quantity;
          cart.push(data);
        }
      });
      // this.setCartAction(cart);
      localforage.setItem("cart", cart);
    },
    addToCart(product) {
      this.product = product;
      localforage.getItem("cart").then(response => {
        // this.showDialog = false;
        let cart = [];
        let d = 0;
        let data = {
          id: "",
          quantity: 0
        };
        if (isEmpty(response)) {
          product.quantity = 1;
          cart.push({ id: product.id, quantity: 1 });
          this.productMenu.push(product);
          localforage.setItem("cart", cart);
          return;
        } else {
          this.productMenu.map((value, key) => {
            if (value.id == this.product.id) {
              this.product.quantity++;
              Vue.set(this.productMenu, key, this.product);
              d = 1;
            }
          });
          if (d != 1) {
            // console.log(product);
            this.product.quantity = 1;
            this.productMenu.unshift(this.product);
          }
        }
        this.setCart();
      });
    }
  }
};
</script>
