<template>
  <div>
    <div class="cart-card-mobile">
      <button
        v-if="cartInfo.total > 0"
        class="btn btn-lg btn-block btn-green"
        type="button"
      >Оформить заказ</button>
    </div>
    <div v-if="cartInfo.total > 0 && manager && $route.name != 'cart'">
      <div class="cart-card">
        <div class="container">
          <div class="row">
            <div class="col-auto">
              <router-link :to="{name:'cart'}" class="btn btn-link">
                <i class="icon">shopping_cart</i>
                <span class="text">{{$t('cart.cart')}}</span>
                <!-- <span class="badge badge-danger">1</span> -->
              </router-link>
            </div>
            <div class="col cart-card-center">
              <div class="item">
                {{$t("cart.shop")}}:
                <a href="/">{{manager.name}}</a>
              </div>
              <div class="item">{{$t("cart.inCart")}} {{cartInfo.prods.length}}</div>
              <div
                class="item"
              >{{$t("cart.price")}} {{cartInfo.total | toCurrency}} {{$t("cart.sum")}}</div>
            </div>
            <div class="col-auto">
              <router-link class="btn btn-green" :to="{name:'cart'}">{{$t('cart.button')}}</router-link>
            </div>
          </div>
        </div>
      </div>
      <div class="cart-card-mobile">
        <router-link :to="{name:'cart'}" class="btn btn-lg btn-block btn-green">
          {{$t('cart.cart')}}
          <span>{{cartInfo.total | toCurrency}} {{$t("cart.sum")}}</span>
        </router-link>
      </div>
    </div>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      // manager: null
    };
  },
  computed: mapGetters({
    cartInfo: "cart",
    manager: "manager"
  }),
  watch: {
    manager: {
      immediate: true,
      handler() {
        // this.fetchManager();
        this.getTotalOfCart();
      }
    },
    cartInfo() {
      // getTotalOfCart();
    }
  },
  methods: {
    // fetchManager() {
    //   console.log(this.managerSlug);
    //   axios.get(`/api/managers/${this.managerSlug}`).then(response => {
    //     this.manager = response.data.data;
    //   });
    // },
    getTotalOfCart() {
      // if (this.manager.slug) {
      //   axios
      //     .get(`/api/managers/${this.manager.slug}/products`)
      //     .then(response => {
      //       let manager = response.data;
      //       // manager.products;
      //     });
      // }
    }
  }
};
</script>

