<template>
  <div class="content">
    <div v-if="!showPage" class="loader">
      <div class="loader-container"></div>
    </div>
    <div class="container" v-else>
      <h1 class="main-title">{{$t('file.delivery')}}</h1>
      <div class="content-inner" v-if="locale == 'ru'">
        <main class="main">НА РУССКОМ</main>
        <aside class="aside">РУССКАЯ СТОРОНА</aside>
      </div>
      <div class="content-inner" v-if="locale == 'uz'">
        <main class="main">OZBEKCHA ICHI</main>
        <aside class="aside">YONI</aside>
      </div>
    </div>
  </div>
</template>
<script>
import { mapGetters } from "vuex";

export default {
  data() {
    return {
      showPage: false
    };
  },
  computed: mapGetters({
    locale: "locale"
  }),
  mounted() {
    this.showPage = true;
  }
};
</script>
