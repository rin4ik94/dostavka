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
              <li class="product selected">
                <div class="product-inner">
                <a href="/storename/products/id" data-toggle="modal" data-target="#product">
                  <div class="product-image"><img src="/desktop/img/001.jpg"></div>
                  <div class="product-title">Carefree Large ежедневки 2.5к 36шт dasdas dasd asd asd asd asdasdasdas dasd asdasdasdasdasdas dasd asdasd asd</div>
                  </a>
                  <div class="product-footer">
                    <div class="counter-widget input-group">
                      <div class="input-group-prepend"><button class="btn btn-outline-red" type="button"><i class="icon">remove</i></button></div>
                      <input class="form-control" type="text" value="2 шт" disabled>
                      <div class="input-group-append"><button class="btn btn-outline-green" type="button"><i class="icon">add</i></button></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product">
                <div class="product-inner">
                <a href="/storename/products/id" data-toggle="modal" data-target="#product">
                  <div class="product-discount">-10%</div>
                  <div class="product-image"><img src="/desktop/img/001.jpg"></div>
                  <div class="product-title">Carefree Large ежедневки 2.5к 36шт dasdas dasd asd asd asd asdasdasdas dasd asdasdasdasdasdas dasd asdasd asd</div>
                  </a>
                  <div class="product-footer">
                    <div class="product-price">
                      <div class="product-price-new">3 200 сум</div><div class="product-quantity">за 1 кг.</div>
                    </div>
                    <button class="btn btn-green product-add-button" type="submit">В корзину</button>
                  </div>
                </div>
              </li>
              <li class="product">
                <div class="product-inner">
                <a href="/storename/products/id" data-toggle="modal" data-target="#product">
                  <div class="product-image"><img src="/desktop/img/001.jpg"></div>
                  <div class="product-title">Carefree Large ежедневки 2.5к 36шт dasdas dasd asd asd asd asdasdasdas dasd asdasdasdasdasdas dasd asdasd asd</div>
                  </a>
                  <div class="product-footer">
                    <div class="product-price">
                      <div class="product-price-new">3 200 сум</div><div class="product-quantity">за 1 шт.</div>
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
           <Categories />  
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

import Categories from "../components/AsideCategories";
export default {
  data() {
    return {
      catalog: null,
      notFound: false
    };
  },
  components: { Categories, NotFound },
  methods: {
    getCatalog() {
      setTimeout(() => {
        let uri = `/api/managers/${this.$route.params.id}?withManagers&region=${
          this.region
        }`;
        axios
          .get(uri)
          .then(response => {
            this.catalog = response.data.data;
          })
          .catch(() => {
            this.notFound = true;
          });
      }, 0);
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
