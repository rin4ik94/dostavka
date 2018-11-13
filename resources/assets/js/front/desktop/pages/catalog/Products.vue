<template>
<div>
    <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>
  
    <ul class="products"> 
      <li class="product" :key="product.id" v-for="product in products">
        <div class="product-inner">
          <router-link class="product-image" v-if="$route.name == 'catalog' | $route.name == 'tp'" :to="{name: 'tp', params:{product : product.slug}}">
            <div class="product-discount" v-if="product.new_price < product.old_price">-{{getPersentage(product)}}%</div>
            <div class="product-img"><img :src="product.image"></div>
          </router-link>
          <router-link class="product-image" v-if="$route.name == 'category' | $route.name == 'pp'" :to="{name: 'pp', params:{product : product.slug}}">
            <div class="product-discount" v-if="product.new_price < product.old_price">-{{getPersentage(product)}}%</div>
            <div class="product-img"><img :src="product.image"></div>
          </router-link>
          <div class="product-info">
            <div class="product-title">{{product.name}}</div>
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
        </div>
      </li> 
    </ul> 
    <Pagination @topGo="scrollTOP" v-if="showPage" :pagination="pagination" :offset="3" @paginate="allProducts"/>
    <pu-dialog-confirm  v-if="manager && showPage"
        :pu-active.sync="active"
        :pu-size="500"
        :pu-title="$t('cart.confirmTitle')"
        :pu-content="$t('cart.confirmContent', {'shop': manager.name ? manager.name : 'none'})"
        :pu-confirm-text="$t('helper.yes')"
        :pu-cancel-text="$t('helper.no')" 
        @pu-confirm="confirmAdd" /> 
    </div>
</template>
<script>
import localforage from "localforage";
import { isEmpty } from "lodash";
import { mapActions, mapGetters } from "vuex";
import Pagination from "../../components/Pagination";  

export default {
  props: ["price", "branch"],
  components: { Pagination }, 
  data() {
    return {
      pagination: {},
      product: "",
      productMenu: [],
      products: [],
      active: false,
      showPage:false,
      scrolled:false
    };
  },

  watch: {
     lang(lang){ 
       this.scrolled = false
       this.showPage = false
      if (this.$route.name == "category") { 
      
        this.fetchItems();
      } else {
        this.allProducts();
      }
    },
    $route(route) {
      if (route.name == "category") {
      //  this.scrolled = false
        
        this.fetchItems();
      } else {
        // this.allProducts();
      }
    },
    price(price) {
       this.scrolled = false
      
      if (this.$route.name == "catalog") {
        this.allProducts();
        return;
      }
      this.fetchItems();
    },
    cart: {
      deep: true,
      handler() {
        this.cartEvent();
        this.productMenu = [];
      }
    },
   
  }, 
 created() {
    window.scrollTo(0,0)
    $("#product").on("hide.bs.modal", this.replacePage);

    if (!this.$route.params.sluged) {
      this.allProducts();
    } else {
      this.fetchItems();
    }
  },
  computed: mapGetters({
    totalCart: "totalCart",
    manager: "manager",
    cart: "cart",
    lang: "locale"
  }),
  methods: {
    async scrollTOP(){
new Promise((resolve, reject) => {  
            $("html, body").animate({ scrollTop: 140 }, 600);
          })
    },
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
      // if(this.scrolled){
      //     new Promise((resolve, reject) => {
      //       $("html, body").animate({ scrollTop: 140 }, 600);
      //     })
      // }
      // this.scrolled = true
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
      this.products = response.data.data;
      this.pagination = response.data.meta;  
      this.showPage = await true 
      this.fetchProducts();
    },
    async fetchItems() {
      //   if(this.scrolled){
      //     new Promise((resolve, reject) => {
      //       $("html, body").animate({ scrollTop: 140 }, 600);
      //     }) 
      //   }
      // this.scrolled = true
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

      this.products = await response.data.data;
      this.pagination =await response.data.meta;  
      this.showPage = await true 
      
      this.fetchProducts();
    },
    ...mapActions({
      setCart: "setCart",
      setManager: "setManager",
      setTotal: "setTotal",
      addToTotal: "addToTotal"
    }),
    removeFromCart(product) {
      let item = this.productMenu.findIndex(prod => {
        return prod.id == product.id;
      });
      if (this.productMenu.length == 1) {
        this.productMenu = [];
        localforage.removeItem("cart");
        localforage.removeItem("manager");
        localforage.removeItem("cartRegion");
        localforage.removeItem("totalCart");
        this.setManager("empty");
        this.setCart("empty");
      } else {
        this.addToTotal(-product.new_price);

        this.productMenu.splice(item, 1);
      }

      this.cartData(this.productMenu);
    },
     async fetchProducts() { 
      let res =  await localforage.getItem("cart").then(response => {
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
                } else {
                  if (!l.new_price) {
                    // this.productMenu.splice(o, 1);
                  }
                }
              });
            });
            
          }
        }); 
      
    },
    decreaseQuantity(product) {
      let index = this.productMenu.findIndex(prod => {
        return prod.id == product.id;
      });
      --product.quantity;
      this.addToTotal(-product.new_price);
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
      let total = 0;

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
          cart.unshift(data);
        }
      });
      localforage.setItem("cart", cart);
      this.setCart(cart);
      // this.setTotal(total);
    },
    cartEvent() {
      localforage.getItem("cart").then(response => {
        if (!isEmpty(response)) {
          // this.productMenu = response;
          this.fetchProducts();
        }
      });
    },
    confirmAdd() {
      this.productMenu = [];
      // this.productMenu.push(product);
      localforage.removeItem("cart");
      localforage.removeItem("totalCart");
      this.setTotal(0);
      this.addToTotal(this.product.new_price);

      this.emptyCartAdd(this.product);
      this.cartData();
    },
    emptyCartAdd(product) {
      let cart = [];
      localforage.setItem("cartRegion", this.$route.params.city);
      axios.get(`/api/managers/${this.$route.params.slug}`).then(response => {
        this.setManager(response.data.data);
        localforage.setItem("manager", response.data.data);
      });

      product.quantity = 1;
      cart.unshift({ id: product.id, quantity: 1 });
      this.productMenu.push(product);
      localforage.setItem("cart", cart);
    },
    addToCart(product) {
      this.product = product;
      localforage.getItem("cart").then(response => {
        let d = 0;
        let data = {
          id: "",
          quantity: 0
        };
        if (isEmpty(response)) {
          this.addToTotal(product.new_price);

          this.emptyCartAdd(product);
          this.cartData();

          return;
        } else {
          if (this.manager.slug != this.$route.params.slug) {
            this.active = true;
            return;
          }
          this.productMenu.map((value, key) => {
            if (value.id == this.product.id) {
              this.addToTotal(product.new_price);
              localforage.setItem("cartRegion", this.$route.params.city);

              this.product.quantity++;
              Vue.set(this.productMenu, key, this.product);
              d = 1;
            }
          });

          if (d != 1) {
            this.addToTotal(product.new_price);
            localforage.setItem("cartRegion", this.$route.params.city);

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
