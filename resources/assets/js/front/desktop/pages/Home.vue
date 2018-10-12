<template>
    <div class="content">
  <InnerHeader />

  <div class="container">
    
    <h1 class="main-title">Магазины и сети в Городе Фергане</h1>
    <div class="content-inner">
      <main class="main">
          <div class="main-sorter btn-group btn-group-sm btn-group-toggle">
            <a class="btn btn-outline-light active" href="/?partner-category=all">Все</a>
            <a class="btn btn-outline-light" href="/?partner-category=1">Супермаркети</a>
            <a class="btn btn-outline-light" href="/?partner-category=2">Косметика</a>
            <a class="btn btn-outline-light" href="/?partner-category=3">Алкогольные магазины</a>
            <a class="btn btn-outline-light" href="/?partner-category=4"><input type="radio" name="options" id="option3" autocomplete="off">Бытовая техника</a>
          </div>
          <ul class="partners">
            <li class="partner">
              <router-link :to="{name: 'catalog'}" class="partner-inner">
                <div class="partner-logo"><img src="/desktop/img/ret_3.png"></div>
                <div class="partner-info">
                  <div class="partner-name">Перекресток</div>
                  <div class="partner-category">Супермаркети</div>
                  <div class="partner-adress">Ферганская область, г.Фергана, ул.Сайлгох 16</div>
                </div>
              </router-link>
            </li>
            <li class="partner">
              <router-link :to="{name: 'catalog'}" class="partner-inner">
                <div class="partner-logo"><img src="/desktop/img/ret_2.png"></div>
                <div class="partner-info">
                  <div class="partner-name">Пятерчка</div>
                  <div class="partner-category">Супермаркети</div>
                  <div class="partner-adress">Ферганская область, г.Фергана, ул.Сайлгох 16</div>
                </div>
              </router-link>
            </li>
            <li class="partner">
              <router-link :to="{name: 'catalog'}" class="partner-inner">
                <div class="partner-logo"><img src="/desktop/img/ret_10.png"></div>
                <div class="partner-info">
                  <div class="partner-name">Диски</div>
                  <div class="partner-category">Супермаркети</div>
                  <div class="partner-adress">Ферганская область, г.Фергана, ул.Сайлгох 16</div>
                </div>
              </router-link>
            </li>
            <li class="partner">
              <router-link :to="{name: 'catalog'}" class="partner-inner">
                <div class="partner-logo"><img src="/desktop/img/ret_44.png"></div>
                <div class="partner-info">
                  <div class="partner-name">Euro Spar</div>
                  <div class="partner-category">Супермаркети</div>
                  <div class="partner-adress">Ферганская область, г.Фергана, ул.Сайлгох 16</div>
                </div>
              </router-link>
            </li>
            <li class="partner">
              <router-link :to="{name: 'catalog'}" class="partner-inner">
                <div class="partner-logo"><img src="/desktop/img/ret_35.png"></div>
                <div class="partner-info">
                  <div class="partner-name">Ашан</div>
                  <div class="partner-category">Супермаркети</div>
                  <div class="partner-adress">Ферганская область, г.Фергана, ул.Сайлгох 16</div>
                </div>
              </router-link>
            </li>
            <li class="partner">
              <router-link :to="{name: 'catalog'}" class="partner-inner">
                <div class="partner-logo"><img src="/desktop/img/ret_18.png"></div>
                <div class="partner-info">
                  <div class="partner-name">Metro</div>
                  <div class="partner-category">Супермаркети</div>
                  <div class="partner-adress">Ферганская область, г.Фергана, ул.Сайлгох 16</div>
                </div>
              </router-link>
            </li>
          </ul>
      </main>
    </div>
  </div>
</div>
</template>
<script>
import InnerHeader from "../components/InnerHeader";
export default {
  components: { InnerHeader }
};
</script>
