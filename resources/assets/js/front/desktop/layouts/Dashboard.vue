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
    }
  },
  mounted() {
    this.getRegions();
    // this.setRegion().catch(() => {
    //   console.log("sad");
    //   $("#Regions").modal("show");
    // });
  },
  components: { CartInfo, Navbar, Footer }
};
</script>

