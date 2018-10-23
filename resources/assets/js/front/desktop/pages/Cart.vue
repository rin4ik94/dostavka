<template>
    <div class="content">
  <div class="container">
    <div class="main-actions">
      <router-link class="btn btn-outline-green" :to="{name:'home'}" exact>&#8592;  {{$t('pages.back')}}</router-link>
    </div>
    <h1 class="main-title"   v-if="region && manager">Ваша корзина из магазина «{{manager.name}}» {{region.name}}</h1>
    <div class="content-inner">
    <main class="main" v-if="filteredProducts.length > 0">
      <ul class="cart-items"> 
          <li class="cart-item" :key="product.id" v-for="product in filteredProducts">
            <a class="cart-item-column cart-item-image" href="/">
              <img :src="product.image">
            </a>
            <div class="cart-item-column cart-item-desc">
              <a href="/">{{product.name}}</a>
            </div>
            <div class="cart-item-column cart-item-counter">
              <div class="counter-widget input-group input-group-sm">
                <div class="input-group-prepend" v-if="product.quantity ==1"><button @click="removeFromCart(product)" class="btn btn-outline-red" type="button"><i class="icon">clear</i></button></div>
                 <div class="input-group-prepend" v-else><button class="btn btn-outline-red" type="button" @click="decreaseQuantity(product)"><i class="icon">remove</i></button></div>
               
                <input class="form-control" type="text" :value="`${product.quantity} ${product.measure}`" disabled>
                <div class="input-group-append"><button class="btn btn-outline-green" type="button" @click="addToCart(product)"><i class="icon">add</i></button></div>
              </div>
            </div>
              <div class="cart-item-column cart-item-price">
              <div class="cart-item-price-new">{{product.new_price | toCurrency}} сум</div>
              <div class="cart-item-price-old" v-if="product.new_price < product.old_price">{{product.old_price | toCurrency}} сум</div>
            </div>
          </li> 
        </ul>
    </main>
    <main  class="main" v-else>
      <h1>content goes here</h1>
    </main>
    <aside class="aside">

      <div class="card">
        <form class="card-body">
          <div class="form-group">
            <div class="card-title">Оформление</div>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Имя">
          </div>
          <div class="form-group">
            <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">+998</span>
            </div>
            <input class="form-control" type="text" placeholder="Телефон">
            </div>
          </div>
          <div class="form-group">
            <select class="custom-select">
              <option value="0" disabled selected>Регион</option>
              <option value="1">Город Фергана</option>
              <option value="2">Город Маргилан</option>
              <option value="2">Город Киргули</option>
            </select>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Улица">
          </div>
          <div class="form-group form-row">
            <div class="col"><input class="form-control" type="text" placeholder="Дом"></div>
            <div class="col"><input class="form-control" type="text" placeholder="Корп."></div>
            <div class="col"><input class="form-control" type="text" placeholder="Кв."></div>
          </div>
          <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="cart_payment_1" name="cart_payment" value="1" class="custom-control-input" checked>
              <label class="custom-control-label" for="cart_payment_1">Наличными</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="cart_payment_2" name="cart_payment" value="2" class="custom-control-input">
              <label class="custom-control-label" for="cart_payment_2">Картой</label>
            </div>
          </div>
          <button class="btn btn-block btn-green" type="submit">Заказать</button>
        </form>
      </div>
    </aside>
    </div>
  </div>
</div>
</template>
<script>
import { mapGetters, mapActions } from "vuex";

import localforage from "localforage";
import { isEmpty } from "lodash";
export default {
  data() {
    return {
      products: [],
      region: null
    };
  },
  computed: {
    ...mapGetters({
      cartInfo: "cart",
      manager: "manager"
    }),
    filteredProducts() {
      let d = [];
      this.products.map((v, k) => {
        this.cartInfo.prods.map((value, key) => {
          if (v.id == value.id) {
            v.quantity = value.quantity;
            d.unshift(v);
          }
        });
      });
      return d;
    }
  },
  watch: {
    cartInfo() {
      this.getProducts();
    }
    // region() {
    //   this.fetchRegion();
    // }
  },
  methods: {
    fetchRegion(region) {
      if (region) {
        axios.get(`/api/regions/${region}`).then(response => {
          this.region = response.data.data;
          this.getProducts();
        });
      }
    },
    ...mapActions({
      setCart: "setCart",
      setTotal: "setTotal",
      setManager: "setManager",
      addToTotal: "addToTotal"
    }),
    cartData() {
      let total = 0;

      let cart = [];
      let data = {
        id: "",
        quantity: 0
      };
      this.products.map((value, key) => {
        data = {
          id: "",
          quantity: 0
        };
        if (value.id != data.id) {
          data.id = value.id;
          data.quantity = value.quantity;
          cart.unshift(data);
        }
      });
      localforage.setItem("cart", cart);
      this.setCart(cart);
      // this.setTotal(total);
    },
    decreaseQuantity(product) {
      let index = this.products.findIndex(prod => {
        return prod.id == product.id;
      });
      --product.quantity;
      this.addToTotal(-product.new_price);
      Vue.set(this.products, index, product);
      this.cartData();
    },
    removeFromCart(product) {
      let item = this.products.findIndex(prod => {
        return prod.id == product.id;
      });
      if (this.products.length == 1) {
        this.products = [];
        localforage.removeItem("cart");
        localforage.removeItem("manager");
        localforage.removeItem("cartRegion");
        localforage.removeItem("totalCart");
        this.setManager("empty");
        this.setCart("empty");
      } else {
        this.addToTotal(-product.new_price);

        this.products.splice(item, 1);
      }

      this.cartData();
    },
    addToCart(product) {
      let d = 0;
      let data = {
        id: "",
        quantity: 0
      };
      this.products.map((value, key) => {
        if (value.id == product.id) {
          this.addToTotal(product.new_price);
          // localforage.setItem("cartRegion", this.$route.params.city);

          product.quantity++;
          Vue.set(this.products, key, product);
          d = 1;
        }
      });

      this.cartData();
    },
    getProducts() {
      this.$nextTick(() => {
        let params = {};
        let p;
        this.cartInfo.prods.map((v, k) => {
          if (!p) {
            return (p = v.id);
          }
          p = p + "," + v.id;
        });
        params["ids"] = p;
        axios
          .get(`/api/managers/${this.manager.slug}/products/cart`, {
            params: params
          })
          .then(response => {
            this.products = response.data.data;
          });
      });
    }
  },
  mounted() {
    localforage.getItem("cartRegion").then(region => {
      if (!isEmpty("region")) {
        this.fetchRegion(region);
      }
    });
  }
};
</script>
