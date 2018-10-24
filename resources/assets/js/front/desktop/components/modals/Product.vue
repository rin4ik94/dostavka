<template>
      <div class="modal fade" id="product" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <button type="button" class="close d-none" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="row">
          <div class="col-auto f-product-image">
            <div class="f-product-image-inner">
              <img class="f-product-img" :src="product.image" alt="">
            </div>
          </div>
          <div class="col f-product-content">
            <div class="f-product-content-inner">
              <h1 class="title f-product-title">{{product.name}}</h1>
              <div class="f-product-segment" v-if="product.category">
                <a @click.prevent="changeRoute(product.category.parent.slug)" v-if="product.category.parent">{{product.category.parent.name}}  / </a>
                <a @click.prevent="changeRoute(product.category.slug)">{{product.category.name}}</a>
              </div>
              <div class="f-product-quantity">{{product.new_price | toCurrency}} сум за 1 шт</div>
              <div class="f-product-price">
                <div class="f-product-price-new">{{product.new_price | toCurrency}} сум</div>
                <div class="f-product-price-old"></div>
              </div>
              <div class="row mt-auto">
                <div class="col">
                  <div class="counter-widget input-group">
                     <div class="input-group-prepend" v-if="productInCart & quantity == 1"><button class="btn btn-outline-red" type="button" @click="removeFromCart"><i class="icon">clear</i></button></div>
                      <div class="input-group-prepend" v-if="!productInCart & quantity == 1"><button class="btn btn-outline-red" type="button" disabled><i class="icon">remove</i></button></div>
                      <div class="input-group-prepend" v-if="quantity > 1"><button class="btn btn-outline-red" type="button" @click="decreaseQuantity"><i class="icon">remove</i></button></div>
                      <input class="form-control" type="text" :value="`${quantity} ${product.measure}`" disabled>
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button" @click="increaseQuantity"><i class="icon">add</i></button></div>
                  </div>
                </div>
                <div class="col">
                  <button v-if="!productInCart" @click="addToCart" class="btn btn-block btn-green">Добавить в корзину</button>
                  <button v-else class="btn btn-block btn-green" @click="increaseCart">Готово</button>
                </div>
              </div>
               <pu-dialog-confirm v-if="manager"
                :pu-active.sync="active"
                :pu-size="500"
                :pu-title="$t('cart.confirmTitle')"
                :pu-content="$t('cart.confirmContent', {'shop': manager.name})"
                :pu-confirm-text="$t('helper.yes')"
                :pu-cancel-text="$t('helper.no')" 
                @pu-cancel="onCancel"
                @pu-confirm="confirmAdd" /> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
 
</div>
</template>
<script>
import localforage from "localforage";
import { isEmpty } from "lodash";
import { mapActions, mapGetters } from "vuex";
export default {
  data() {
    return {
      product: "",
      active: false,
      productMenu: [],
      quantity: 1,
      value: null
    };
  },
  watch: {
    $route() {
      if (this.$route.params.product) {
        this.storageCart();
        this.fetchProduct();
      }
    }
  },
  computed: {
    productInCart() {
      let item = this.productMenu.find(prod => {
        return prod.id == this.product.id;
      });
      return item ? true : false;
    },
    ...mapGetters({
      cart: "cart",
      manager: "manager"
    })
  },
  methods: {
    onCancel() {
      this.active = false;
    },
    ...mapActions({
      setCart: "setCart",
      setManager: "setManager",
      setTotal: "setTotal",
      addToTotal: "addToTotal"
    }),
    hideModal() {
      $("#product").modal("hide");
    },
    changeRoute(slug) {
      this.$router.replace({ name: "category", params: { sluged: slug } });
      this.hideModal();
    },
    confirmAdd() {
      this.productMenu = [];
      localforage.removeItem("cart");
      localforage.removeItem("totalCart");

      this.setTotal(0);
      this.addToTotal(this.product.new_price * this.quantity);
      this.productMenu.unshift({
        id: this.product.id,
        quantity: this.quantity
      });
      localforage.setItem("cartRegion", this.$route.params.city);
      axios.get(`/api/managers/${this.$route.params.slug}`).then(response => {
        this.setManager(response.data.data);
        localforage.setItem("manager", response.data.data);
      });
      localforage.setItem("cart", this.productMenu);
      this.setCart(this.productMenu);
      this.hideModal();
      return;
    },
    addToCart() {
      if (this.manager.slug != this.$route.params.slug) {
        localforage.getItem("cart").then(response => {
          if (isEmpty(response)) {
            this.setTotal(0);
            this.addToTotal(this.product.new_price * this.quantity);
            this.productMenu.unshift({
              id: this.product.id,
              quantity: this.quantity
            });
            localforage.setItem("cartRegion", this.$route.params.city);
            axios
              .get(`/api/managers/${this.$route.params.slug}`)
              .then(response => {
                this.setManager(response.data.data);
                localforage.setItem("manager", response.data.data);
              });
            this.setCart(this.productMenu);
            this.hideModal();
          } else {
            this.active = true;
            return;
          }
        });
      } else {
        this.productMenu.unshift({
          id: this.product.id,
          quantity: this.quantity
        });
        this.hideModal();
        this.addToTotal(this.product.new_price * this.quantity);
        localforage.setItem("cart", this.productMenu);
        this.setCart(this.productMenu);
        return;
      }
    },
    increaseCart() {
      setTimeout(() => {
        this.hideModal();

        if (this.product.quantity == this.quantity) {
          return;
        }
      }, 0);
      if (this.product.quantity > this.quantity) {
        let d = this.product.quantity - this.quantity;
        this.addToTotal(-(this.product.new_price * d));
        let index = this.productMenu.findIndex(
          product => product.id == this.product.id
        );
        this.productMenu.splice(index, 1);
        this.productMenu.unshift({
          id: this.product.id,
          quantity: this.quantity
        });

        localforage.setItem("cart", this.productMenu);
        this.setCart(this.productMenu);
        return;
      }
      this.addToTotal(this.product.new_price * this.quantity);

      let index = this.productMenu.findIndex(
        product => product.id == this.product.id
      );
      this.productMenu.splice(index, 1);
      this.productMenu.unshift({
        id: this.product.id,
        quantity: this.quantity
      });

      localforage.setItem("cart", this.productMenu);
      this.setCart(this.productMenu);
      return;
    },
    removeFromCart() {
      let index = this.productMenu.findIndex(prod => {
        return prod.id == this.product.id;
      });
      this.addToTotal(-(this.product.quantity * this.product.new_price));
      this.productMenu.splice(index, 1);
      $("#product").modal("hide");

      localforage.setItem("cart", this.productMenu);
      this.setCart(this.productMenu);
    },
    increaseQuantity() {
      this.quantity++;
    },
    decreaseQuantity() {
      this.quantity--;
    },
    fetchProduct() {
      axios
        .get(`/api/products/${this.$route.params.product}`)
        .then(response => {
          this.product = response.data.data;

          let l = this.productMenu.find(p => {
            return p.id == this.product.id;
          });
          if (l) {
            this.quantity = l.quantity;
            this.product.quantity = l.quantity;
          } else {
            this.product.quantity = 1;

            this.quantity = 1;
          }
        });
    },
    storageCart() {
      localforage.getItem("cart").then(response => {
        if (!isEmpty(response)) {
          this.productMenu = response;
        }
      });
    }
  },
  mounted() {
    if (this.$route.params.product) {
      this.fetchProduct();
    }
    this.storageCart();
  }
};
</script>
