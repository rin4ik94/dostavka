<template>
    <div class="cart-card" v-if="cartInfo.total > 0 && manager && $route.name != 'cart'">
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
        <div class="item">Магазин: <a href="/">{{manager.name}}</a></div>
        <div class="item">Товаров в корзине {{cartInfo.prods.length}}</div>
        <div class="item">На сумму {{cartInfo.total | toCurrency}} сум</div>
      </div>
      <div class="col-auto">
        <router-link class="btn btn-green" :to="{name:'cart'}">Оформить заказ</router-link>
      </div>
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

