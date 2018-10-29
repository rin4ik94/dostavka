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
import localforage from "localforage";
import { isEmpty } from "lodash";
import Footer from "../components/Footer";
import Navbar from "../components/Navbar";
import CartInfo from "../components/CartInfo";
// import { mapActions, mapGetters } from "vuex";
import { EventBus } from "../bus.js";
import { mapActions } from 'vuex';

export default {
  data() {
    return {
      regions: []
    };
  },
  components: { CartInfo, Navbar, Footer },
  methods: {
    ...mapActions({
      setRegionId : 'setRegionId',
      setRegion : 'setRegion'
    }),
    async getRegions() {
      let response = await axios.get("/api/regions");
      this.regions = response.data.data;
    },
    setRegionD(){  
      localforage.getItem('region').then((region)=>{
        if(isEmpty(region)){
          this.setRegionId("1")
        }
      })
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
  async created() {
    this.$nextTick(() => {
      this.getRegions();
    });
      EventBus.$on("changeLanguage", () => {
      this.getRegions();
    });
    // try {
      await this.setRegion()
    // } catch (error) {
    //   alert(error)
      
    // }
    
    $("#Regions").on("hide.bs.modal", this.setRegionD);

  }
};
</script>

