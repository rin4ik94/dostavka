<template>
  <div> 
      <Navbar></Navbar>
      <router-view></router-view>
      <CartInfo />
      <Footer></Footer>
  </div>
</template>
<script>
import Footer from "../components/Footer";
import Navbar from "../components/Navbar";
import CartInfo from "../components/CartInfo";
export default {
  components: { CartInfo, Navbar, Footer }
};
</script>

