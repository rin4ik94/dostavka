<template>
<div>
    <ul class="products"> 
              <li class="product" :key="product.id" v-for="product in products">
        <div class="product-inner">
        <router-link v-if="$route.name == 'catalog' | $route.name == 'tp'" :to="{name: 'tp', params:{product : product.slug}}">
       
              <div class="product-discount" v-if="product.new_price < product.old_price">-{{getPersentage(product)}}%</div>
            <div class="product-image"><img :src="product.image"></div>
            <div class="product-title">{{product.name}}</div>
        </router-link>
         <router-link v-if="$route.name == 'category' | $route.name == 'pp'" :to="{name: 'pp', params:{product : product.slug}}">
              <div class="product-discount" v-if="product.new_price < product.old_price">-{{getPersentage(product)}}%</div>
            <div class="product-image"><img :src="product.image"></div>
            <div class="product-title">{{product.name}}</div>
        </router-link>
        <div class="product-footer" v-if="productInCart(product)">
                    <div class="counter-widget input-group">
                      <div class="input-group-prepend" v-if="product.quantity == 1"><button class="btn btn-outline-red" type="button" @click="removeFromCart(product)"><i class="icon">clear</i></button></div>
                      <div class="input-group-prepend" v-else><button class="btn btn-outline-red" type="button" @click="decreaseQuantity(product)"><i class="icon">remove</i></button></div>
                      <input class="form-control" type="text" :value="`${product.quantity} ${product.measure}`" disabled>
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button" @click="addToCart(product)"><i class="icon">add</i></button></div>
                    </div>
            </div>
            <div class="product-footer" v-else>
            <div class="product-price">
                <div class="product-price-new">{{product.new_price | toCurrency }} сумов</div><div class="product-quantity">за 1 {{product.measure}}.</div>
            </div>
            <button class="btn btn-green product-add-button" type="submit" @click="addToCart(product)">В корзину</button>
            </div>
            
        </div>
        </li> 
    </ul> 
    <Pagination :pagination="pagination" :offset="3" @paginate="allProducts"/>

    </div>
</template>
<script>
import localforage from "localforage";
import { isEmpty } from "lodash";
import { mapActions, mapGetters } from "vuex";
import Pagination from "../../components/Pagination";

export default {
  props: ["price"],
  components: { Pagination },
  data() {
    return {
      pagination: {},
      product: "",
      productMenu: [],
      products: []
    };
  },

  watch: {
    $route(route) {
      if (route.name == "category") {
        this.fetchItems();
      } else {
        // this.allProducts();
      }
    },
    price(price) {
      if (this.$route.name == "catalog") {
        this.allProducts();
        return;
      }
      this.fetchItems();
    },
    cart: {
      deep: true,
      handler() {
        // alert("asdsd");
        this.cartEvent();
      }
    }
  },
  beforeMount: async function() {
    $(document).on("hide.bs.modal", this.replacePage);

    if (!this.$route.params.sluged) {
      this.allProducts();
    } else {
      this.fetchItems();
    }
  },
  computed: mapGetters({
    totalCart: "totalCart",
    cart: "cart"
  }),
  methods: {
    replacePage() {
      if (this.$route.params.sluged) {
        this.$router.replace({
          name: "category",
          params: { sluged: this.$route.params.sluged }
        });
      } else {
        this.$router.replace({
          name: "catalog",
          params: { slug: this.$route.params.slug }
        });
      }
    },
    async allProducts() {
      let params = {};
      if (this.price) {
        params["price"] = this.price;
      }
      if (this.pagination) {
        params["page"] = this.pagination.current_page;
      }
      let response = await axios.get(
        `/api/products?manager=${this.$route.params.slug}`,
        {
          params: params
        }
      );
      this.products = await response.data.data;
      this.pagination = await response.data.meta;

      this.fetchProducts();
    },
    async fetchItems() {
      let params = {};
      if (this.price) {
        params["price"] = this.price;
      }
      if (this.pagination) {
        params["page"] = this.pagination.current_page;
      }
      let response = await axios.get(
        `/api/products?manager=${this.$route.params.slug}&category=${
          this.$route.params.sluged
        }`,
        { params: params }
      );
      this.products = response.data.data;
      this.pagination = response.data.meta;

      this.fetchProducts();
    },
    ...mapActions({
      setCart: "setCart"
    }),
    removeFromCart(product) {
      let item = this.productMenu.findIndex(prod => {
        return prod.id == product.id;
      });
      this.productMenu.splice(item, 1);
      this.cartData(this.productMenu);
    },
    fetchProducts() {
      setTimeout(() => {
        localforage.getItem("cart").then(response => {
          if (!isEmpty(response)) {
            this.productMenu = response;
            this.products.map((v, k) => {
              v.quantity = 1;
              this.productMenu.map((l, o) => {
                if (v.id == l.id) {
                  v.quantity = l.quantity;
                  Vue.set(this.products, k, v);
                  l = v;
                  Vue.set(this.productMenu, o, l);
                }
              });
            });
          }
        });
      }, 0);
    },
    decreaseQuantity(product) {
      let index = this.productMenu.findIndex(prod => {
        return prod.id == product.id;
      });
      --product.quantity;
      Vue.set(this.productMenu, index, product);
      this.cartData();
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
    cartData() {
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
      localforage.setItem("cart", cart);
      this.setCart(cart);
    },
    cartEvent() {
      localforage.getItem("cart").then(response => {
        if (!isEmpty(response)) {
          this.productMenu = response;
          this.fetchProducts();
        }
      });
    },
    addToCart(product) {
      this.product = product;
      localforage.getItem("cart").then(response => {
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
            this.product.quantity = 1;
            this.productMenu.unshift(this.product);
          }
        }
        this.cartData();
      });
    }
  }
};
</script>
