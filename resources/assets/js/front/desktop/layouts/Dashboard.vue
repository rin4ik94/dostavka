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
    },
    replacePage() {
      let url = this.$route.path;
      var str = url.substr(url.lastIndexOf("/") + 1);
      // alert(str);
      if (str == this.$route.params.slug) {
        this.$router.replace({ name: "catalog" });
      } else {
        this.$router.replace({
          name: "ct",
          params: { sluged: this.$route.params.sluged }
        });
      }
    }
  },
  mounted() {
    this.getRegions();
    let self = this;
    $("#product").on("hide.bs.modal", this.replacePage);
    // this.setRegion().catch(() => {
    //   console.log("sad");
    //   $("#Regions").modal("show");
    // });
  },
  components: { CartInfo, Navbar, Footer }
};
</script>

