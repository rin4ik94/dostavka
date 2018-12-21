<template>
    <div class="content">
      <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>
      <div class="container" v-else>
        <h1 class="main-title">{{$t('file.delivery')}}</h1>
        <div class="content-inner">
        <main class="main">

        </main>
        <aside class="aside">

        </aside>
        </div>
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
