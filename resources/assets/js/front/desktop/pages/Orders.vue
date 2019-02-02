<template>
  <div class="content">
    <div v-if="!showPage" class="loader">
      <div class="loader-container"></div>
    </div>
    <div class="container" v-else>
      <h1 class="main-title">{{$t('file.myorders')}}</h1>
      <div class="content-inner">
        <main class="main">
          <ul class="orders">
            <li class="order" v-for="order in orders">
              <div class="order-inner">
                <div class="order-column order-store">
                  <img :src="order.manager.logo">
                </div>
                <div class="order-column order-info">
                  <div>{{$t('file.orderid')}}: {{order.id}}</div>
                  <div>{{$t('file.orderdate')}}: {{order.created_at}}</div>
                  <div>{{$t('file.orderstatus')}}: {{order.status.name}}</div>
                </div>
                <div class="order-column order-products">
                  <a href="/order.php">
                    <div>{{order.products.length}}</div>
                    <div>{{$t('file.products')}}</div>
                  </a>
                </div>
                <div class="order-column order-sum">
                  <div>dostavka {{order.delivery_price}} сум</div>
                  <div>summa zakaza {{order.order_price}} сум</div>
                  <div class="order-sum-text">{{$t('file.allprice')}} {{order.total_price}} сум</div>
                </div>
              </div>
            </li>
          </ul>
        </main>
        <aside class="aside"></aside>
      </div>
    </div>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      showPage: false,
      orders: []
    };
  },
  computed: {
    ...mapGetters({
      userId: "userId"
    })
  },
  watch: {
    userId() {
      this.getOrders();
    }
  },
  methods: {
    getOrders() {
      if (this.userId) {
        axios.get(`api/orders?userId=${this.userId}`).then(response => {
          this.orders = response.data.data.orders;
        });
      }
    }
  },
  created() {
    this.getOrders();
    this.showPage = true;
  }
};
</script>
