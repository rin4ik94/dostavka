<template>
    <header class="header">
  <div class="container">
    <div class="header-inner" > 
      <router-link class="header-logo" :to="{name: 'home'}" exact></router-link>

      <ul class="nav header-nav">
        <li class="nav-item"><router-link class="nav-link" :to="{name: 'home'}" exact>Магазины</router-link></li>
        <li class="nav-item"><router-link class="nav-link" :to="{name: 'delivery'}">Доставка</router-link></li>
      </ul>
      <form class="input-group header-search" v-if="$route.name == 'catalog' || $route.name == 'ct'">
        <input class="form-control" type="search" name="s" placeholder="Поиск товаров">
        <div class="input-group-append"><button class="btn btn-outline-green" type="submit">Найти</button></div>
      </form>
       <div class="header-controls">
        <div class="dropdown">
          <button class="btn btn-link header-lang-toggle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Русский</button>
          <div class="dropdown-menu">
            <a class="dropdown-item acitve" href="/?lang=ru">Русский</a>
            <a class="dropdown-item" href="/?lang=uz">O`zbekcha</a>
          </div>
        </div>
         
          <button class="btn btn-link header-profile-toggle" type="button" data-toggle="modal" data-target="#Regions">
            <i class="icon">place</i><span class="text">{{region.name}}</span>
          </button>
        <div class="dropdown">
          <button class="btn btn-link header-profile-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon">person</i><span class="text">Вход</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
              <router-link class="dropdown-item" :to="{name: 'profile'}">Мои данные</router-link> 
              <router-link class="dropdown-item" :to="{name: 'orders'}">Мои Заказы</router-link> 
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout">Выйти</a>
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

export default {
  props: ["regions"],
  data() {
    return {
      region: "",
      id: this.regionId
    };
  },
  methods: {
    ...mapActions({
      setRegion: "setRegionId",
      setRegionName: "setRegionName"
    }),
    regionData() {
      this.regions.map((value, key) => {
        if (value.id == this.regionId) {
          this.region = value;
          this.setRegionName(value.name);
          EventBus.$emit("changeRegion", this.region);
        }
      });
    }
  },
  computed: mapGetters({
    regionId: "regionId"
  }),

  watch: {
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
    }
  }
};
</script>
