<template>
<div>

    <div class="content" v-if="!notFound">
      <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>
      
      <div class="container" v-if="!notFound && catalog && showPage">
        <div class="main-actions">
          <a class="btn btn-outline-green" @click="$router.push({name:'home'})">&#8592; {{$t('pages.back')}}</a>
        </div> 
        <h1 class="main-title" v-if="branchName">{{$t('file.catalog')}} «{{catalog.name}}»</h1>
        <div class="btn-group btn-group-sm btn-group-toggle main-sorter" data-toggle="buttons">
          <span class="main-sorter-title">{{$t('file.sort')}}:</span>
          <div @click.prevent="sortByPrice = false" :class="{'active' : !sortByPrice}" class="btn btn-outline-light">
            {{$t('file.popular')}} 
          </div>
          <div @click.prevent="sortByPrice = true" :class="{'active' : sortByPrice}" class="btn btn-outline-light"> 
            {{$t('file.price')}}
          </div>
        </div>
        <div class="content-inner">
          <main class="main">
            
              <router-view  v-if="active != 0" :branch="branchName" :price="sortByPrice" @setActive="setActive"></router-view>
              <Products  v-if="active == 0" :branch="branchName" :price="sortByPrice" /> 
          </main>
          <aside class="aside">
          <nav class="categories">
            <ul class="nav">
              <li class="nav-item">
                <router-link class="nav-link" :to="{name: 'catalog', params:{slug : catalog.slug}}" exact :class="{'active': $route.name == 'tp'}">{{$t('file.allcats')}}</router-link>
              </li>
              <SubCategories :activeIndex="active" :key="category.id"  @updateActive="setActive" :index="category.id" v-for="(category,index) in categories" :category="category" />
            </ul>
          </nav> 
          </aside>
        </div>
      </div>
    </div>
    <NotFound v-if="notFound  && !catalog && showPage"/>
    </div>
</template>
<script>
import { mapGetters } from "vuex";
import NotFound from "../NotFound";
import Products from "./Products";
import SubCategories from "./SubCategories";
import localforage from "localforage";
import { isEmpty } from "lodash"; 

export default {
  data() {
    return {
      active: 0,
      catalog: null,
      notFound: false,
      id: 0,
      products: [],
      categories: [],
      showPage:false,
      branchName: null,
      sortByPrice: false
    };
  },
  components: { NotFound, Products,SubCategories },
  watch: {
    $route: {
      immediate: true,
      handler($route) {
        if ($route.name == "catalog") {
          this.id = 0;
          this.active = 0;
        }
      }
    },
    // lang(){
    //   this.showPage = false
    //   this.getCatalog();      
    // }
    // regionSlug: {
    //   handler(region) {
    //     this.getCatalog();
    //   }
    // }
  },
  methods: {
    setActive(id) {
      this.active = id;
      this.id = id;
    },
    async getCatalog() {
      // setTimeout(() => {
        let uri = `/api/managers/${
          this.$route.params.slug
        }?withManagers&region=${this.$route.params.city}`;
        let response = await axios
          .get(uri)
          .then(response => {
            this.catalog = response.data.data;
            if (this.catalog.branches.length > 0) {
              this.branchName = this.catalog.branches[0].region_name;
            } else { 
            this.notFound = true;
            this.showPage =true 
            this.catalog = null
            return
              // this.$router.replace({ name: "notFound" });
            }
            this.getCategories();
          })
          .catch(() => {
            this.$router.push({ name: "notFound" });
          });
      // }, 0);
    },
    async getCategories() {
      // this.$nextTick(() => {
    let response = await axios
          .get(`/api/categories?withManager&manager=${this.catalog.id}`)
          // .then(response => {
            this.categories = response.data.data;
            this.showPage = true
            this.categories.map((v, k) => {
              if (v.children.length == 0) {
                if (this.$route.params.sluged == v.slug) {
                  this.setActive(v.id);
                }
              } else {
                if (this.$route.params.sluged == v.slug) {
                  this.setActive(v.id);
                }
                v.children.map((ve, ke) => {
                  if (this.$route.params.sluged == ve.slug) {
                    this.setActive(ve.id);
                  }
                });
              }
            });
          // });
      // });
    }
  },
  computed: {
    ...mapGetters({
      region: "regionId",
      regionName: "regionName",
      regionSlug: "regionSlug",
      // lang: "locale"
    })
  },
  async created(){
    this.getCatalog(); 
  }
};
</script>
