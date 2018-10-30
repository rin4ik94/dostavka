<template>
    <div class="content">
     <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>
    <div v-else>
        HERE I'M PARTNER
    </div>
    </div>
</template>
<script>
export default {
  data(){
    return{
      showPage:false
    }
  },
  mounted(){
    this.showPage = true
  }
}
</script>