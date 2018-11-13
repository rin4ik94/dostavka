<template>
    <header class="header">
  <div class="container">
    <div class="header-inner"> 
      <button class="btn btn-link header-menu-toggle" type="btn" data-toggle="modal" data-target="#drawer"><i class="icon">menu</i></button>
      <router-link class="header-logo" :to="{name: 'home'}" exact>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 146 24"><path class="header-logo-path" d="M8.29,1.234L0,23.692h4.879l1.53-4.627h8.046L16,23.692h4.879L12.543,1.234H8.29z M7.648,15.316l2.769-8.406l2.799,8.406H7.648z M22.898,23.692h4.436V0h-4.436V23.692z M43.571,8.761c-1.412-1.378-3.235-2.067-5.468-2.067c-1.57,0-2.95,0.355-4.138,1.064c-1.188,0.71-2.098,1.712-2.73,3.008c-0.632,1.296-0.948,2.771-0.948,4.427v0.201c0,2.653,0.711,4.751,2.134,6.293S35.747,24,38.133,24s4.288-0.774,5.705-2.321s2.126-3.602,2.126-6.162l-0.031-1.141C45.771,12.01,44.983,10.139,43.571,8.761z M40.642,19.162c-0.602,0.829-1.438,1.244-2.509,1.244c-1.101,0-1.948-0.42-2.539-1.259c-0.591-0.839-0.887-2.052-0.887-3.638c0-1.781,0.296-3.097,0.887-3.947c0.591-0.85,1.428-1.275,2.509-1.275c1.091,0,1.938,0.428,2.539,1.282c0.602,0.854,0.902,2.06,0.902,3.615C41.544,17.008,41.243,18.334,40.642,19.162z M60.695,17.522L54.974,1.234h-5.996v22.458h4.589v-6.139L53.108,6.972l5.996,16.72h3.151l6.011-16.735l-0.459,10.596v6.139h4.604V1.234h-6.027L60.695,17.522z M89.528,12.602c0-1.871-0.599-3.324-1.797-4.357c-1.198-1.033-2.817-1.55-4.857-1.55c-1.346,0-2.56,0.234-3.64,0.702c-1.081,0.468-1.917,1.113-2.509,1.936c-0.591,0.823-0.887,1.717-0.887,2.684h4.421c0-0.627,0.212-1.121,0.635-1.481c0.423-0.36,1.007-0.54,1.751-0.54c0.846,0,1.466,0.231,1.858,0.694c0.393,0.463,0.589,1.08,0.589,1.851v0.956h-2.034c-2.458,0.01-4.336,0.488-5.637,1.434c-1.3,0.946-1.95,2.303-1.95,4.072c0,1.44,0.533,2.632,1.598,3.578C78.135,23.527,79.478,24,81.099,24c1.713,0,3.105-0.602,4.176-1.805c0.092,0.596,0.24,1.095,0.444,1.496h4.466v-0.262c-0.428-0.812-0.648-2.01-0.658-3.594V12.602z M85.092,18.972c-0.265,0.494-0.673,0.887-1.224,1.18c-0.551,0.293-1.152,0.44-1.805,0.44c-0.673,0-1.203-0.18-1.591-0.54c-0.388-0.36-0.581-0.817-0.581-1.373l0.015-0.262c0.143-1.542,1.321-2.314,3.533-2.314h1.652V18.972z M97.221,8.992l-0.122-1.99h-4.176v16.689h4.421v-10.92c0.52-1.141,1.616-1.712,3.289-1.712c0.459,0,0.989,0.041,1.591,0.123l0.061-4.288c-0.428-0.134-0.887-0.201-1.377-0.201C99.337,6.694,98.109,7.46,97.221,8.992z M119.171,7.003h-5.308l-4.237,5.013l-0.857,1.111V0h-4.421v23.692h4.421v-5.09l1.591-1.604l4.252,6.694h5.078l-6.5-9.733L119.171,7.003z M127.906,6.694c-1.509,0-2.853,0.357-4.031,1.072s-2.087,1.733-2.73,3.054c-0.642,1.321-0.965,2.82-0.965,4.496v0.432c0,2.499,0.763,4.499,2.287,6c1.524,1.501,3.501,2.252,5.928,2.252c1.377,0,2.631-0.265,3.763-0.794c1.132-0.53,2.029-1.267,2.692-2.213l-2.172-2.452c-0.958,1.244-2.29,1.866-3.993,1.866c-1.101,0-2.011-0.329-2.73-0.987c-0.719-0.658-1.149-1.532-1.292-2.622h10.538v-1.82c0-2.643-0.65-4.684-1.95-6.123S130.17,6.694,127.906,6.694z M130.857,13.758h-6.149c0.153-1.115,0.503-1.973,1.048-2.572c0.546-0.599,1.256-0.899,2.133-0.899c0.938,0,1.662,0.271,2.172,0.813c0.51,0.542,0.775,1.309,0.795,2.301V13.758z M144.701,20.329c-0.663,0-1.112-0.134-1.346-0.401c-0.235-0.267-0.353-0.71-0.353-1.326v-8.329h2.831v-3.27h-2.831V2.9h-4.419v4.103h-2.417v3.27h2.417v8.992c0.061,3.157,1.642,4.735,4.742,4.735c0.918,0,1.809-0.134,2.676-0.401v-3.378C145.623,20.293,145.19,20.329,144.701,20.329z"/></svg>
      </router-link>
 
      <ul class="nav header-nav">
        <li class="nav-item"><router-link class="nav-link" :to="{name: 'home'}" exact>{{$t("header.shops")}}</router-link></li>
        <li class="nav-item"><router-link class="nav-link" :to="{name: 'delivery'}">{{$t("header.delivery")}}</router-link></li>
      </ul>
      <div class="header-search" v-if="$route.name == 'catalog' || $route.name == 'category' || $route.name == 'pp'|| $route.name == 'tp'">
        <input class="form-control" @focus="show=true" type="search" v-model="search"  placeholder="Поиск товаров">
        <div class="dropdown-menu w-100  " style="display:block" v-show="products.length && show">
            <div class="dropdown-item" :key="product.id" v-for="product in products" @click="showProduct(product)">
             <div v-html="highlight(product.name)"></div>
            </div> 
            <!-- <div class="empty">Ne chego ne naydeno</div> -->
        </div>
        <!-- <div class="input-group-append"><button class="btn btn-outline-green" type="submit">Найти</button></div> -->
      </div>
       <div class="header-controls">
        <div class="dropdown">
          <button class="btn btn-link header-lang-toggle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{locale == 'ru' ? 'Русский' : 'O`zbekcha'}}</button>
          <div class="dropdown-menu">
            <a class="dropdown-item acitve" @click.prevent="changeLocale('ru')">Русский</a>
            <a class="dropdown-item" @click.prevent="changeLocale('uz')">O`zbekcha</a>
          </div>
        </div>

        <div class="dropdown" v-if="user.data && user.data.phone">
          <button class="btn btn-link header-profile-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon">person</i><span class="text">Mening profilim</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
              <router-link class="dropdown-item" :to="{name: 'profile'}">Мои данные</router-link> 
              <router-link class="dropdown-item" :to="{name: 'orders'}">Мои Заказы</router-link> 
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" @click.prevent="signout">{{$t('header.logout')}}</a>
          </div>
        </div>
         <button v-else class="btn btn-link header-profile-toggle" type="button" data-toggle="modal" data-target="#login">
            <i class="icon">person</i><span class="text">{{$t("header.login")}}</span>
          </button>
      </div>
    </div>
  </div>
</header>
</template>
<script>
import { mapActions, mapGetters } from "vuex"; 
import _ from "lodash";
export default {
  props: ["regions"],
  data() {
    return {
      region: "",
      show: true,
      search: "",
      products: [],
      id: this.regionId
    };
  },
  methods: {
    highlight(name) {
      if (!this.search) {
        return name;
      }
      return name.replace(new RegExp(this.search, "gi"), match => {
        return '<em class="highlightText">' + match + "</em>";
      });
    },
    showProduct(product) {
      if (this.$route.name == "catalog") {
        this.$router.push({ name: "tp", params: { product: product.slug } });
      } else {
        this.$router.push({ name: "pp", params: { product: product.slug } });
      }
      this.show = false;
    },
    ...mapActions({
      logout: "logout",
      setRegion: "setRegionId",
      setRegionName: "setRegionName",
      langChange: "langChange"
    }),
    regionData() {
      this.regions.map((value, key) => {
        if (value.id == this.regionId) {
          this.region = value;
          this.setRegionName(value); 
        }
      });
    },
    signout() {
      this.logout().then(() => {
        this.phone = "";
        if(!this.$route.meta.guest){
          this.$router.replace({ name: "home" });
        }
      });
    },
    changeLocale(lang) {
      if (lang != this.locale) {
        this.langChange(lang)
        location.reload()
      }
    }
  },
  computed: mapGetters({
    regionId: "regionId",
    locale: "locale",
    user: "user"
  }),

  watch: {
    $route() {
      this.search = "";
    },
    regionId: {
      immediate: true,
      handler: function(regionId) {
        this.setRegion(regionId);
        this.regionData();
      }
    },
    regions: {
      immediate: true,
      handler: function(regions) {
        this.regionData();
      }
    },
    search: _.debounce(function() {
      if (this.search.length < 3) {
        this.products = [];
        return;
      }
      axios
        .get(
          `/api/products/search?q=${this.search}&manager=${
            this.$route.params.slug
          }`
        )
        .then(response => {
          this.products = response.data.data;
        });
    }, 300)
  }
};
</script>
<style>
/* .dropdown-item:hover {
  background-color: #4aae9b;
  color: white;
} */
.highlightText {
  font-weight: 600;
  /* background-color: #fd5646; */
  color: black;
}
</style>
