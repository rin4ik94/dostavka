<template>
    <div class="content">
      <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>
      <div class="container" v-else>
        <h1 class="main-title">{{$t('file.myorders')}}</h1>
        <div class="content-inner">
        <main class="main">
          <ul class="orders">
            <li class="order">
              <div class="order-inner">
                <div class="order-column order-store">
                  <img src="/desktop/img/makrologo.jpg">
                </div>
                <div class="order-column order-info">
                  <div>{{$t('file.orderid')}}</div>
                  <div>{{$t('file.orderdate')}}</div>
                  <div>{{$t('file.orderstatus')}}</div>
                </div>
                <div class="order-column order-products">
                  <a href="/order.php">
                    <div>15</div>
                    <div>{{$t('file.products')}}</div>
                  </a>
                </div>
                <div class="order-column order-sum">
                  <div class="order-sum-number">5 2000 сум</div>
                  <div class="order-sum-text">{{$t('file.allprice')}}</div>
                </div>
              </div>
            </li>
          </ul>
        </main>
        <aside class="aside">

        </aside>
        </div>
  </div>
</div>
</template>
<script>
export default {
  data(){
    return{
      showPage:false
    }
  },
  mounted(){
    this.showPage = true
  }
}
</script>
