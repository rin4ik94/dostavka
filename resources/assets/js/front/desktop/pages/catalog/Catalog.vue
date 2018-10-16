<template>
<div>
    <div class="content" v-if="catalog">
      <div class="container">
        <div class="main-actions">
          <a class="btn btn-outline-green" @click="$router.push({name:'home'})">&#8592; Назад к список магазинов</a>
        </div>
        <h1 class="main-title">Каталог продуктов магазина «{{catalog.name}}» {{catalog.branches[0].region_name}}</h1>
        <div class="content-inner">
          <main class="main">
            <div class="btn-group btn-group-sm btn-group-toggle main-sorter" data-toggle="buttons">
              <span class="main-sorter-title">Сортировать:</span>
              <label class="btn btn-outline-light active" for="option1">
                <input type="radio" name="options" id="option1" autocomplete="off" checked>По популярности
              </label>
              <label class="btn btn-outline-light" for="option2">
                <input type="radio" name="options" id="option2" autocomplete="off">По цене
              </label>
            </div>
              <router-view v-show="active != 0" @setActive="setActive"></router-view>
              <Products v-if="active == 0" :products="products" /> 
            <nav>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" tabindex="-1">&#8592; Назад</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Вперед &#8594;</a>
                </li>
              </ul>
            </nav>
          </main>
          <aside class="aside">
          <nav class="categories">
            <ul class="nav">
              <li class="nav-item">
                <router-link class="nav-link" :to="{name: 'catalog', params:{slug : catalog.slug}}" exact>Все категории</router-link>
              </li>
              <SubCategories :activeIndex="active"  :key="index" v-for="(category,index) in categories" :category="category" />
              
            </ul>
          </nav> 
          </aside>
        </div>
      </div>
    </div>
    <NotFound v-if="notFound"/>
    </div>
</template>
<script>
import { mapGetters } from "vuex";
import NotFound from "../NotFound";
import Products from "./Products";

export default {
  data() {
    return {
      active: 0,
      catalog: null,
      notFound: false,
      id: 0,
      products: [],
      categories: []
    };
  },
  components: { NotFound, Products },
  watch: {
    $route() {
      if (this.$route.name == "catalog") {
        this.id = 0;
        this.active = 0;
        this.allProducts(0);
      }
    },
    id: {
      immediate: true,
      handler: function(id) {
        // this.filterProducts(this.id);
      }
    },
    catalog: {
      immediate: true,
      handler: function() {
        // this.filterCats(this.id);
      }
    }
  },
  methods: {
    setActive(id) {
      this.active = id;
      this.id = id;
    },
    // updateProducts(id) {
    //   this.active = id;
    //   this.id = id;
    // },
    allProducts() {
      let data = [];
      this.categories.map((v, k) => {
        if (v.children.length == 0) {
          v.products.map((value, key) => {
            data.push(value);
          });
        } else {
          v.children.map((ve, ke) => {
            if (ve.children.length == 0) {
              ve.products.map((vu, ku) => {
                data.push(vu);
              });
            } else {
              ve.children.map((vey, kep) => {
                data.push(vey.products);
              });
            }
          });
        }
      });
      this.products = data;
    },
    // filterProducts(id) {
    //   if (id == 0) {
    //     this.allProducts();
    //   }
    //   if (this.active != 0) {
    //     let category = this.categories.find(category => category.id == id);
    //     if (!category) {
    //       console.log("ds");
    //       this.categories.map((v, k) => {
    //         v.children.map((value, key) => {
    //           if (id == value.id) {
    //             category = value;
    //           }
    //         });
    //       });
    //     }
    //     if (category.children.length > 0) {
    //       let data = [];

    //       category.children.map((value, key) => {
    //         value.products.map((v, k) => {
    //           data.push(v);
    //         });
    //       });

    //       this.products = data;
    //       return;
    //     }
    //     this.products = category.products;
    //   }
    // },
    filterCats(id) {
      let data = [];
      this.categories.map((v, k) => {
        if (v.children.length == 0) {
          v.products.map((value, key) => {
            data.push(value.products);
          });
        } else {
          v.children.map((ve, ke) => {
            if (ve.children.length == 0) {
              data.push(ve.products);
            } else {
              ve.children.map((vey, kep) => {
                data.push(vey.products);
              });
            }
          });
        }
      });
      this.categories = data;
    },
    getCatalog() {
      setTimeout(() => {
        let uri = `/api/managers/${
          this.$route.params.slug
        }?withManagers&region=${this.region}`;
        axios
          .get(uri)
          .then(response => {
            this.catalog = response.data.data;
            this.getCategories();
          })
          .catch(() => {
            this.notFound = true;
          });
      }, 0);
    },
    getCategories() {
      axios
        .get(`/api/categories?withProds&manager=${this.catalog.id}`)
        .then(response => {
          this.categories = response.data.data;

          this.allProducts();
        });
    }
  },
  computed: {
    ...mapGetters({
      region: "regionId",
      regionName: "regionName"
    })
  },
  created() {
    this.getCatalog();
  }
};
</script>
