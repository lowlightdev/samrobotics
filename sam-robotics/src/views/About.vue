<template>
  <section class="about container-fluid p-0">
    <div class="row align-items-center  animate__fadeIn animate__animated">
    <header class="col-12 animate__slideInLeft animate__animated blue--bg d-flex align-self-center justify-self-center">
        <h1 class="m-auto text-center align-self-center justify-self-center">{{ $route.name }}</h1>
      </header>
    </div>
    <div class="row align-items-center container text-left m-auto no-gutters vh-50">
      <div class="col-12 animate__slideInRight animate__animated p-4">
        <h1 class="animate__fadeIn animate__animated pb-4"> SAM Robotics</h1>
        <p class="text-left animate__fadeIn animate__animated"> Societatea SAM Robotics este reprezentantul oficial din 2008, in Romania pentru: <a href="https://www.yaskawa.eu.com/">Yaskawa Robotics Division (MOTOMAN)</a> care este unul din liderii mondiali in conceperea, productia, implementarea si comercializarea de celule robotizate si roboti industriali cu diverse domenii de aplicabilitate in industrie, cercetare si invatamint.<p>
        <p class="text-left animate__fadeIn animate__animated"> Supunem atentiei dumneavoastra aceasta gama de servicii si produse, prin statulul nostru de distribuitor autorizat in Romania. Pe langa aceasta colectivul nostru va ofera si o intreaga gama de echipamente, unelte si accesorii necesare sectorului de confectii si constructii metalice. </p>
        <div class="row pt-4 align-items-center justify-content-center">
          <div class="col-6 text-right">
            <h2>     
              <font-awesome-icon icon="award" class="align-self-start justify-self-start" v-on:click="goHome"/>
              Parteneri oficiali 
            </h2>
          </div>
          <div class="col-6 text-left">
            <a href="https://www.yaskawa.eu.com/"> <img src="~@/assets/yaskawa.png" class="img-fluid" /> </a>
          </div>
        </div>
      </div>
    </div>
    </section>
</template>

<script>
export default {
  name:'about',
  components: {
  },
  methods:{
  },
}
</script>

<style lang="scss" scoped>
header{
  min-height:30vh;
}

</style>
