<template>
  <div> 
      <Navbar :regions="regions"></Navbar>
      <router-view></router-view>
      <CartInfo />
      <Footer></Footer> 
      <RegionModal :regions="regions"/>
      <LoginModal />
      <ProductModal/>
  </div>
</template>
<script>
import Footer from "../components/Footer";
import Navbar from "../components/Navbar";
import CartInfo from "../components/CartInfo";
// import { mapActions, mapGetters } from "vuex";
import { EventBus } from "../bus.js";

export default {
  data() {
    return {
      regions: []
    };
  },
  components: { CartInfo, Navbar, Footer },

  methods: {
    async getRegions() {
      let response = await axios.get("/api/regions");
      this.regions = response.data.data;
    }
    // replacePage() {
    //   if (this.$route.params.sluged) {
    //     this.$router.replace({
    //       name: "category",
    //       params: { sluged: this.$route.params.sluged }
    //     });
    //   } else {
    //     this.$router.replace({
    //       name: "catalog",
    //       params: { slug: this.$route.params.slug }
    //     });
    //   }
    // }
  },
  watch: {
    $route: {
      immediate: true,
      handler($route) {
        Vue.nextTick(() => {
          if ($route.name == "pp") {
            $("#product").modal("show");
          } else {
            if ($route.name == "tp") {
              $("#product").modal("show");
            }
          }
        });
      }
    }
  },
  created() {
    this.$nextTick(() => {
      this.getRegions();
    });
  },
  mounted() {
    EventBus.$on("changeLanguage", () => {
      // this.$emit("hidePage");
      this.getRegions();
    });
    // $("#product").on("hide.bs.modal", this.replacePage);
  }
};
</script>

