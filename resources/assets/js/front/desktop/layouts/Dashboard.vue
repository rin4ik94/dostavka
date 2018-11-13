<template>
  <div :class="totalCart > 0 ? 'cart-add-class': ''"> 
      <Navbar :regions="regions"></Navbar>
      <router-view></router-view>
      <CartInfo />

      <Footer></Footer> 
      <RegionModal :regions="regions"/>
      <LoginModal />
      <Drawer />
      <ProductModal/>
  </div>
</template>
<script>
import localforage from "localforage";
import { isEmpty } from "lodash";
import Footer from "../components/Footer";
import Navbar from "../components/Navbar";
import CartInfo from "../components/CartInfo";
import { mapActions, mapGetters } from "vuex"; 

export default {
  data() {
    return {
      regions: [],
      showPage:false,

    };
  },
  components: { CartInfo, Navbar, Footer },
  computed:{
    ...mapGetters({
          lang : 'locale',
          totalCart:'totalCart'
    })
  },
  methods: { 
    ...mapActions({
      setRegionId : 'setRegionId',
      setRegion : 'setRegion'
    }),
    async getRegions() {
      let response = await axios.get("/api/regions");
      this.regions = response.data.data;
      await this.$emit("ready");
    },
    async setRegionD(){  
      await localforage.getItem('region').then((region)=>{
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
    },
    lang(){
      this.getRegions();
    }
  },
  async created() {
    this.$router.beforeEach((to, from, next) => {
      this.showPage = false;
      next();
    });
    this.$nextTick(() => {
      this.getRegions();
    });  
    await this.setRegion() 
    $("#Regions").on("hide.bs.modal", this.setRegionD);

  }
};
</script>

