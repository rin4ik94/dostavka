<template> 
  <div class="content">  
        <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>
<div v-else>

      <InnerHeader />
      <div class="container">   
    <h1 class="main-title">{{$t('drawer.shops')}} <a class="region-toggle" data-toggle="modal" data-target="#Regions">{{regionName}}</a></h1>
    <div class="content-inner">
      <main class="main">
          <div class="main-sorter btn-group btn-group-sm btn-group-toggle">
            <a class="btn btn-outline-light" :class="{'active' : active == 0}" @click.prevent="updateList('all')">Все</a> 
            <a :class="{'active' : active == category.id}" @click.prevent="updateList(category)" v-for="category in categories" :key="category.id" class="btn btn-outline-light">{{category.name}}</a> 
          </div>
          <ul class="partners" v-if="filtered.length > 0">
            <li class="partner" v-for="manager in filtered" :key="manager.id">
              <router-link :to="{name:'catalog', params: {city:regionSlug ? regionSlug: 'here', slug: manager.slug}}" class="partner-inner">
                <div class="partner-logo"><img :src="manager.logo"></div>
                <div class="partner-info">
                  <div class="partner-name">{{manager.name}}</div>
                  <div class="partner-category">{{manager.cat}}</div>
                  <!-- <div class="partner-adress">Ферганская область, г.Фергана, ул.Сайлгох 16</div> -->
                </div>
              </router-link>
            </li>
          </ul>
      </main>
    </div>
  </div> 
</div>
</div> 

</template>
<script> 

import InnerHeader from "../../components/InnerHeader";
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      categories: [],
      active: 0,
      category: [],
      showPage:false
    };
  },
  watch:{
    // lang(){
    //   this.getCats();      
    // },
    regionName(){
      this.getCats()
    }
  },
  components: { InnerHeader },
  computed: {
    ...mapGetters({
      region: "regionId",
      regionName: "regionName",
      regionSlug: "regionSlug",
      // lang: "locale"
    }),
    filtered() {
      let data = [];
      if (this.active != 0) {
        this.category.managers.map((value, key) => {
          if (value.branches.length > 0) {
            data.push(value);
          }
        });
      } else {
        this.categories.map((value, key) => {
          value.managers.map((v, k) => {
            if (v.branches.length > 0) {
              data.push(v);
            }
          });
        });
      }
      return data;
    }
  },
  methods: {
    async getCats() {
      if (this.region) {
       let response = await axios
          .get(`api/categories_managers?withManagers&region=${this.region}`) 
            this.categories = response.data.data;
            this.showPage = await true
            if (this.active != 0) {
              this.categories.map((value, key) => {
                if (this.category.id == value.id) {
                  this.category = value;
                }
              });
            } else {
              this.category = [];
            } 
      }
    },
    updateList(category) {
      if (category == "all") {
        this.active = 0;
        return;
      }
      this.category = category;
      this.active = category.id;
    }
  },
  created() {
    this.getCats();  
  } 
};
</script>
