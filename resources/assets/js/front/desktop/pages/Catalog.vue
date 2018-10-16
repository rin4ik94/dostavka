<template>
<div>
    <div class="content" v-if="catalog">
      <div class="container">
        <div class="main-actions">
          <a class="btn btn-outline-green" @click="$router.go(-1)">&#8592; Назад к список магазинов</a>
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
            <ul class="products">
              <li class="product selected">
                <div class="product-inner">
                <a href="/storename/products/id" data-toggle="modal" data-target="#product">
                  <div class="product-image"><img src="/desktop/img/001.jpg"></div>
                  <div class="product-title">Carefree Large ежедневки 2.5к 36шт dasdas dasd asd asd asd asdasdasdas dasd asdasdasdasdasdas dasd asdasd asd</div>
                  </a>
                  <div class="product-footer">
                    <div class="counter-widget input-group">
                      <div class="input-group-prepend"><button class="btn btn-outline-red" type="button"><i class="icon">clear</i></button></div>
                      <input class="form-control" type="text" value="1 шт" disabled>
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button"><i class="icon">add</i></button></div>
                    </div>
                  </div>
                </div>
              </li> 
              <li class="product" v-for="product in products">
                <div class="product-inner">
                <a href="/storename/products/id" data-toggle="modal" data-target="#product">
                  <div class="product-discount">-10%</div>
                  <div class="product-image"><img src="/desktop/img/001.jpg"></div>
                  <div class="product-title">{{product.name}} 2.5к 36шт dasdas dasd asd asd asd asdasdasdas dasd asdasdasdasdasdas dasd asdasd asd</div>
                  </a>
                  <div class="product-footer">
                    <div class="product-price">
                      <div class="product-price-new">{{product.new_price | toCurrency }} сум</div><div class="product-quantity">за 1 кг.</div>
                    </div>
                    <button class="btn btn-green product-add-button" type="submit">В корзину</button>
                  </div>
                </div>
              </li> 
            </ul>
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
              <li class="nav-item"><a class="nav-link" :class="active == 0 ? 'active' : ''" @click="updateProducts(0)">Все категории</a></li>
              <SubCategories @updateProducts="updateProducts" :activeIndex="active"  :key="index" v-for="(category,index) in categories" :category="category" />
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
import NotFound from "./NotFound";
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
  components: { NotFound },
  watch: {
    id: {
      immediate: true,
      handler: function(id) {
        this.filterProducts(this.id);
      }
    },
    catalog: {
      immediate: true,
      handler: function() {
        this.filterCats(this.id);
      }
    }
  },
  methods: {
    updateProducts(id) {
      this.active = id;
      this.id = id;
    },
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
    filterProducts(id) {
      if (id == 0) {
        this.allProducts();
      }
      if (this.active != 0) {
        let category = this.categories.find(category => category.id == id);
        if (!category) {
          this.categories.map((v, k) => {
            v.children.map((value, key) => {
              if (id == value.id) {
                category = value;
              }
            });
          });
        }
        if (category.children.length > 0) {
          let data = [];

          category.children.map((value, key) => {
            value.products.map((v, k) => {
              data.push(v);
            });
          });

          this.products = data;
          return;
        }
        this.products = category.products;
      }
    },
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
