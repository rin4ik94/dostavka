<template>
    <div class="content">
    <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>

  <div class="container" v-else>
    <div class="main-actions">
      <router-link class="btn btn-outline-green" :to="{name:'home'}" exact>&#8592;  {{$t('pages.back')}}</router-link>
    </div>
    <h1 class="main-title"   v-if="region && manager">Ваша корзина «{{manager.name}}»</h1>
    <div class="content-inner">
    <main class="main" v-if="filteredProducts.length > 0">
      <ul class="cart-items"> 
          <li class="cart-item" :key="product.id" v-for="product in filteredProducts">
            <a class="cart-item-column cart-item-image">
              <img :src="product.image">
            </a>
            <div class="cart-item-column cart-item-desc" >
              <a>{{product.name}}</a>
            </div>
            <div class="cart-item-column cart-item-counter">
              <div class="counter-widget input-group input-group-sm">
                <div class="input-group-prepend" v-if="product.quantity ==1"><button @click="removeFromCart(product)" class="btn btn-outline-red" type="button"><i class="icon">clear</i></button></div>
                 <div class="input-group-prepend" v-else><button class="btn btn-outline-red" type="button" @click="decreaseQuantity(product)"><i class="icon">remove</i></button></div>
               
                <input class="form-control" type="text" :value="`${product.quantity} ${product.measure}`" disabled>
                <div class="input-group-append"><button class="btn btn-outline-green" type="button" @click="addToCart(product)"><i class="icon">add</i></button></div>
              </div>
              <span v-if="product.quantity > 1">
               {{ product.new_price | toCurrency }} за 1{{product.measure}}
              </span> 
              
            </div>
              <div class="cart-item-column cart-item-price">
              <div class="cart-item-price-new">{{product.new_price * product.quantity | toCurrency}} сум</div>
              
              <div class="cart-item-price-old" v-if="product.new_price < product.old_price">{{product.old_price * product.quantity | toCurrency}} сум</div>
            </div>
          </li> 
        </ul>
    </main>
    <main  class="main" v-if="filteredProducts.length <! 0 && !success">
      <h1>ПУСТОЙ КОНТЕНТ</h1>
    </main>
    <main  class="main" v-if="success">
      <h1>УСПЕШНО</h1>
    </main>
    <aside class="aside" v-if="products.length">

      <div class="card">
        <form class="card-body">
          <div class="form-group">
            <div class="card-title">Оформление</div>
          </div>
          <div class="form-group">
             
            <input  class="form-control" :class="nameError ?'is-invalid' : ''"  @input="nameError = ''"  v-model="form.user.first_name" type="text" placeholder="Имя">
              <div v-if="nameError">
                <p style="color:red">{{$t('validation.nameError')}}</p>
              </div>
          </div>
          <div class="form-group">
            <input class="form-control" :class="lastNameError ?'is-invalid' : ''"  @input="lastNameError = ''" v-model="form.user.last_name" type="text" placeholder="Фамилия">
             <div v-if="lastNameError">
                <p style="color:red">{{$t('validation.lastNameError')}}</p>
              </div>
          </div>
          <div class="form-group">
            <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">+998</span>
            </div>
            <input v-on:keypress="isNumber($event)" :class="phoneError ?'is-invalid' : ''" :disabled="user.data && user.data.phone" :maxlength="9" @input="phoneError = ''"  v-model="form.user.phone" class="form-control" type="text" placeholder="Телефон">
            </div>
             <div v-if="phoneError">
                <p style="color:red" >{{$t('validation.phoneError')}}</p>
              </div>
          </div>
          <div class="form-group">
            <select class="custom-select" v-model="form.user.region_id">
              <option :value="region.id"  v-for="region in regions" disabled selected>{{region.name}}</option>
               
            </select>
          </div>
          <div class="form-group">
            <input v-model="form.delivery_address_street" class="form-control" type="text" placeholder="Улица">
          </div>
          <div class="form-group form-row">
            <div class="col"><input v-model="form.delivery_address_home" class="form-control" type="text" placeholder="Дом"></div>
            <div class="col"><input v-model="form.delivery_address_floor" class="form-control" type="text" placeholder="Корп."></div>
            <div class="col"><input v-model="form.delivery_address_apartment" class="form-control" type="text" placeholder="Кв."></div>
          </div>
          <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">
              <input v-model="form.payment_type_id" type="radio" id="cart_payment_1" name="cart_payment" value="1" class="custom-control-input" checked>
              <label class="custom-control-label" for="cart_payment_1">Наличными</label>
            </div>
            <!-- <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="cart_payment_2" name="cart_payment" value="2" class="custom-control-input">
              <label class="custom-control-label" for="cart_payment_2">Картой</label>
            </div> -->
          </div>
          <button class="btn btn-block btn-green" @click.prevent="order" type="submit">Заказать</button>
        </form>
      </div>
    </aside>
    </div>
  </div>
  <ModalStep @fine='proceedOrder' :lastName="form.user.last_name"  :firstName="form.user.first_name" :phone="form.user.phone" />
</div>
</template>
<script>
import { mapGetters, mapActions } from "vuex"; 
import ModalStep from '../components/modals/ModalStep'
import localforage from "localforage";
import { isEmpty } from "lodash";
export default {
  components:{ModalStep},
  data() {
    return {
      products: [],
      region: null,
      success:false,
      errors:[],
      showPage:false,
      nameError:null,
      phoneError:null,
      lastNameError:null,
      regions:[],
      form:{
        user:{
          first_name:'',
          last_name:'',
          phone:'',
          region_id:1,
          total:0
        },
        // delivery_price: this.$store.getters('delivery_price'),
        manager_id:null,
        payment_type_id:1,
        delivery_address_home:'',
        delivery_address_street:'',
        delivery_address_floor:'',
        delivery_address_apartment:''
      }
    };
  },
  computed: {
    ...mapGetters({
      // region: "region",
      user: "user",
      cartInfo: "cart",
      delivery_price: "delivery_price",
      manager: "manager",
      lang: "locale",
    }),
    filteredProducts() {
      let d = [];
      this.products.map((v, k) => {
        if(this.cartInfo.prods.length){
          this.cartInfo.prods.map((value, key) => {
          if (v.id == value.id) {
            v.quantity = value.quantity;
            d.unshift(v);
          }
        });
        }
        
      });
      return d;
    }
  },
  watch: { 
    lang(){
      this.showPage = false;
      this.getRegions(); 
      this.fetchRegion(this.region.slug)

    },
    user:{
      deep:true,
      immediate:true,
      handler(user){
        if(user.data && user.data.phone){  
          this.form.user.first_name = user.data.first_name
          this.form.user.phone = user.data.phone.substr(4, 12);
          this.form.user.last_name = user.data.last_name
          }else{
            this.form.user= {
                first_name:null,
                last_name:null,
                phone:null,
                region_id: this.region ? this.region.id : 1
              }
            
          }
      } 
    } 
  },
  methods: {
    fetchRegion(region) {
      if (region) {
        axios.get(`/api/regions/${region}`).then(response => {
          this.region = response.data.data;
          this.form.user.region_id = this.region.id;
          this.getProducts();
        });
      }
    },
    getRegions(){
        axios.get('/api/regions').then(response => {
          this.regions = response.data.data   
          this.showPage = true 
        }
      )
    },
      ...mapActions({
        setCart: "setCart",
        setTotal: "setTotal",
        setManager: "setManager",
        addToTotal: "addToTotal"
      }),
    proceedOrder(){
        this.form.manager_id = this.manager.id
        this.form.delivery_price = this.delivery_price
        this.form.user.phone ='+998' + this.form.user.phone
        let params = {};
        let p;
        this.products.map((v, k) => {
        if (!p) {
          return (p = v.id + '-'+ v.quantity);
        }
          p = p + "," + v.id + '-' + v.quantity;
        });
        params["phone"] = this.form.user.phone;
        params["products"] = p;
        params["form"] = this.form;
        axios.post('api/orders',{params:params}).then(response=>{
          this.setEmpty()
          this.success =true
        }).catch(error=>{
            this.errors = error.response.data.errors
        })
    },
    order(){
      if(this.products.length){ 
        if(!this.user.data | !this.form.user.phone | !this.form.user.last_name | !this.form.user.first_name){   
          if(!this.form.user.first_name) { 
             this.nameError = 'error' 
          }
          if(!this.form.user.last_name) { 
             this.lastNameError = 'error' 
          }
          if(!this.form.user.phone){ 
             this.phoneError = 'error' 
          }
          if(!this.form.user.phone | !this.form.user.last_name | !this.form.user.first_name){
            return;
          }
           
        }  
      
        if( !this.user.data.phone && 9 == this.form.user.phone.length){
           $('#modalstep').modal('show')
            return
          } 
        this.proceedOrder()
      }
    },
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
    setEmpty(){
localforage.removeItem("cart");
        localforage.removeItem("manager");
        localforage.removeItem("cartRegion");
        localforage.removeItem("totalCart");
        this.setManager("empty");
        this.setCart("empty");
        this.products = []
    },
    removeFromCart(product) {
      let item = this.products.findIndex(prod => {
        return prod.id == product.id;
      });
      if (this.products.length == 1) {
        this.products = [];
        this.setEmpty()
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
    async getProducts() {
      // this.$nextTick(() => {
        let params = {};
        let p;
        this.form.total = this.cartInfo.total
        if(this.cartInfo.prods.length){
        this.cartInfo.prods.map((v, k) => {
          if (!p) {
            return (p = v.id);
          }
          p = p + "," + v.id;
        });
        params["ids"] = p;
        let response = await axios
          .get(`/api/managers/${this.manager.slug}/products/cart`, {
            params: params
          }) 

            this.products = response.data.data;
        }
      // });
       
    },
      isNumber: function(evt) {
      evt = evt ? evt : window.event;
      var charCode = evt.which ? evt.which : evt.keyCode;
      if (
        charCode > 31 &&
        (charCode < 48 || charCode > 57) &&
        charCode !== 46
      ) {
        evt.preventDefault();
      } else {
        return true;
      }
    }
  },
  created() { 
    this.getProducts()
    localforage.getItem("cartRegion").then(region => {
      if (!isEmpty("region")) {
        this.fetchRegion(region);
      this.getRegions()
      }else{
         this.showPage = true        
      }
      }) 
  }
};
</script>
