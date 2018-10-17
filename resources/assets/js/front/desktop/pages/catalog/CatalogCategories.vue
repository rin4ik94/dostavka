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
        <router-link :to="{name: 'pp', params:{product : product.id}}" data-toggle="modal" data-target="#product">
            <div v-if="product.new_price < product.old_price" class="product-discount">-{{getPersentage(product)}}%</div>
            <div class="product-image"><img :src="product.image"></div>
            <div class="product-title">{{product.name}} 2.5к 36шт dasdas dasd asd asd asd asdasdasdas dasd asdasdasdasdasdas dasd asdasd asd</div>
        </router-link>
            <div class="product-footer">
            <div class="product-price">
                <div class="product-price-new">{{product.new_price | toCurrency }} сум</div><div class="product-quantity">за 1 кг.</div>
            </div>
            <button class="btn btn-green product-add-button" type="submit">В корзину</button>
            </div>
        </div>
    </li> 
     <!-- <ProductModal  :product="product"/> -->
     <!-- <router-view ></router-view>  -->
              </ul> 

<Pagination :pagination="pagination" :offset="3" @paginate="updateProducts"/>
</div>

</template>
<script>
import Pagination from "../../components/Pagination";

export default {
  data() {
    return {
      pagination: {},
      products: [],
      product: "",
      price: false
    };
  },
  components: { Pagination },
  props: ["sortBy"],
  watch: {
    $route() {
      if (this.$route.name == "ct") {
        this.pagination.current_page = 1;

        this.updateProducts();
      }
    },
    sortBy(sortBy) {
      this.price = sortBy;
      this.updateProducts();
    }
  },
  methods: {
    showModal(product) {
      this.product = product;
    },
    updateProducts() {
      let params = {};
      if (this.price) {
        params["price"] = this.sortBy;
      }
      if (this.pagination) {
        params["page"] = this.pagination.current_page;
      }
      axios
        .get(
          `/api/products?manager=${this.$route.params.slug}&category=${
            this.$route.params.sluged
          }`,
          { params: params }
        )
        .then(response => {
          this.products = response.data.data;
          this.pagination = response.data.meta;
        });
    },
    getPersentage(product) {
      let value = product.old_price - product.new_price;
      return Math.round((value / product.old_price) * 100);
    }
  },
  mounted() {
    this.updateProducts();
  }
};
</script>
