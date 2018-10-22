<template>
    <div class="content">
  <div class="container" v-if="region">
    <div class="main-actions">
      <router-link class="btn btn-outline-green" :to="{name:'home'}" exact>&#8592; Назад к магазин</router-link>
    </div>
    <h1 class="main-title">Ваша корзина из магазина «{{manager.name}}» {{region.name}}</h1>
    <div class="content-inner">
    <main class="main">
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
                <div class="input-group-prepend"><button class="btn btn-outline-red" type="button"><i class="icon">clear</i></button></div>
                <input class="form-control" type="text" :value="`${product.quantity} шт`" disabled>
                <div class="input-group-append"><button class="btn btn-outline-green" type="button"><i class="icon">add</i></button></div>
              </div>
            </div>
            <div class="cart-item-column cart-item-price">
              <div class="cart-item-price-new">{{product.new_price}} сумов</div>
            </div>
          </li> 
        </ul>
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
import { mapGetters } from "vuex";

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
            d.push(v);
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
      axios.get(`/api/regions/${region}`).then(response => {
        this.region = response.data.data;
        this.getProducts();
      });
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
