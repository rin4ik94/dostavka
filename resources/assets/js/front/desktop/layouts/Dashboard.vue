<template>
  <div> 
      <Navbar :regions='regions'></Navbar>
      <router-view></router-view>
      <CartInfo />
      <Footer></Footer> 
      <RegionModal />
      <ProductModal/>
  </div>
</template>
<script>
import Footer from "../components/Footer";
import Navbar from "../components/Navbar";
import CartInfo from "../components/CartInfo";
// import { mapActions, mapGetters } from "vuex";

export default {
  data() {
    return {
      regions: []
    };
  },
  methods: {
    async getRegions() {
      let response = await axios.get("/api/regions");
      this.regions = response.data.data;
      // let self = this;
      // await $("#Regions").on("hide.bs.modal", function() {
      //   self.$store.dispatch("setRegion", this.regions[0]);
      // });
    },
    replacePage() {
      // let url = this.$route.path;
      // var str = url.substr(url.lastIndexOf("/") + 1);
      // alert(str);
      if (this.$route.params.sluged) {
        this.$router.replace({
          name: "ct",
          params: { sluged: this.$route.params.sluged }
        });
      } else {
        this.$router.replace({
          name: "catalog",
          params: { slug: this.$route.params.slug }
        });
      }
    }
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
  beforeMount() {
    this.getRegions();
  },
  mounted() {
    $("#product").on("hide.bs.modal", this.replacePage);
    // this.setRegion().catch(() => {
    //   console.log("sad");
    //   $("#Regions").modal("show");
    // });
  },
  components: { CartInfo, Navbar, Footer }
};
</script>

