<template>
  <div> 
      <Navbar></Navbar>
      <router-view></router-view>
      <CartInfo />
      <Footer></Footer>
      <Modals></Modals>
  </div>
</template>
<script>
import Footer from "../components/Footer";
import Navbar from "../components/Navbar";
import Modals from "../components/Modals";
import CartInfo from "../components/CartInfo";
export default {
  components: { CartInfo, Navbar, Footer, Modals }
};
</script>

