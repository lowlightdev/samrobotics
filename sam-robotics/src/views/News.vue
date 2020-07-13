<template>
  <section class="news row align-items-center vh-100 text-center no-gutters">
    <div class="col-sm-12 col-md-5 animate__slideInLeft animate__animated background--red  text-white vh-100 d-flex align-items-center">
      <font-awesome-icon icon="arrow-left" class="align-self-start justify-self-start m-4 fa-2x position-absolute" v-on:click="goHome"/>
      <h1 class="m-auto animate__fadeIn animate__animated">{{ $route.name }}</h1>
    </div>
    <div class="col-sm-12 col-md-7 animate__slideInRight animate__animated p-4">
      <h2 class="animate__fadeIn animate__animated pb-4"> Despre SAM Robotics</h2>
      <p class="text-left animate__fadeIn animate__animated"> Societatea SAM Robotics este reprezentantul oficial din 2008, in Romania pentru: <a href="https://www.yaskawa.eu.com/">Yaskawa Robotics Division (MOTOMAN)</a> care este unul din liderii mondiali in conceperea, productia, implementarea si comercializarea de celule robotizate si roboti industriali cu diverse domenii de aplicabilitate in industrie, cercetare si invatamint.<p>
      <p class="text-left animate__fadeIn animate__animated"> Supunem atentiei dumneavoastra aceasta gama de servicii si produse, prin statulul nostru de distribuitor autorizat in Romania. Pe langa aceasta colectivul nostru va ofera si o intreaga gama de echipamente, unelte si accesorii necesare sectorului de confectii si constructii metalice. </p>
    </div>
    <PageFooter />
  </section>
</template>

<script>
import PageFooter from "@/components/PageFooter";

export default {
  name:'news',
  components: {
    PageFooter
  },
  methods:{
    goHome(){
      this.$router.push('/')
    }
  },
}
</script>

<style lang="scss" scoped>
.fa-arrow-left{
  cursor: pointer !important;
}
.vh-100{
  @media screen and (max-width: 960px){
    max-height:250px !important; 
  }
}
</style>
