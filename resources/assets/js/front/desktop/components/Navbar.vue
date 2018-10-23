<template>
    <header class="header">
  <div class="container">
    <div class="header-inner" > 
      <!-- <router-link class="header-logo" :to="{name: 'home'}" exact></router-link> -->
 
      <ul class="nav header-nav">
        <li class="nav-item"><router-link class="nav-link" :to="{name: 'home'}" exact>{{$t("header.shops")}}</router-link></li>
        <li class="nav-item"><router-link class="nav-link" :to="{name: 'delivery'}">{{$t("header.delivery")}}</router-link></li>
      </ul>
      <div class="input-group header-search" v-if="$route.name == 'catalog' || $route.name == 'category' || $route.name == 'pp'|| $route.name == 'tp'">
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
            <a class="dropdown-item acitve" @click.prevent="changeLocale">Русский</a>
            <a class="dropdown-item" @click.prevent="changeLocale">O`zbekcha</a>
          </div>
        </div>
         
          <button class="btn btn-link header-profile-toggle" type="button" data-toggle="modal" data-target="#Regions">
            <i class="icon">place</i><span class="text">{{region.name}}</span>
          </button>
        <div class="dropdown">
          <button class="btn btn-link header-profile-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon">person</i><span class="text">{{$t("header.login")}}</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
              <router-link class="dropdown-item" :to="{name: 'profile'}">Мои данные</router-link> 
              <router-link class="dropdown-item" :to="{name: 'orders'}">Мои Заказы</router-link> 
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout">{{$t('header.logout')}}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
</template>
<script>
import { mapActions, mapGetters } from "vuex";
import { EventBus } from "../bus.js";
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
      setRegion: "setRegionId",
      setRegionName: "setRegionName",
      langChange: "langChange"
    }),
    regionData() {
      this.regions.map((value, key) => {
        if (value.id == this.regionId) {
          this.region = value;
          this.setRegionName(value);
          EventBus.$emit("changeRegion", this.region);
        }
      });
    },
    changeLocale() {
      if (this.locale == "ru") {
        this.langChange("uz").then(() => {
          EventBus.$emit("changeLanguage");
        });
      } else {
        this.langChange("ru").then(() => {
          EventBus.$emit("changeLanguage");
        });
      }
    }
  },
  computed: mapGetters({
    regionId: "regionId",
    locale: "locale"
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
  background-color: yellow;
}
</style>
