<template>
    <div class="container-fluid  p-0">
      <div class="row align-items-center banner h-100 no-gutters p-3">
          <div class="col-12 about ">
            <h1 class="text-white">Despre noi</h1>
          </div>
      </div>
      <div class="row p-3 my-4">
         <div class="col-12 about">
           <h1 class="py-4 my-4">Cine suntem? Ce facem? De cand facem?</h1>
            <p>
            Societatea SAM Robotics este reprezentantul oficial din 2008, in Romania pentru: Yaskawa Robotics Division (MOTOMAN) care este unul din liderii mondiali in conceperea, productia, implementarea si comercializarea de celule robotizate si roboti industriali cu diverse domenii de aplicabilitate in industrie, cercetare si invatamint. Supunem atentiei dumneavoastra aceasta gama de servicii si produse, prin statulul nostru de distribuitor autorizat in Romania. Pe langa aceasta colectivul nostru va ofera si o intreaga gama de echipamente, unelte si accesorii necesare sectorului de confectii si constructii metalice.
            </p>
        </div>
      </div>
      <Footer />
    </div>
</template>


<script>
import Footer from '@/components/Footer.vue'

export default {
  name: 'About',
  components:{
      Footer
  },
  props: {
  },
  mounted(){
  }
}   
</script>

<style lang="scss" scoped>
  .about{
    max-width:1140px;
    margin:auto;
  }
  .banner{
    min-height:400px;
    max-height:400px;
    overflow:hidden;
    background-size:cover;
    background: #b92b27; 
    background: -webkit-linear-gradient(top, #4b79a1, #283e51);
    background: -moz-linear-gradient(top, #4b79a1, #283e51);
    background: -o-linear-gradient(top, #4b79a1, #283e51);
    background: linear-gradient(to top, #4b79a1, #283e51); /* Chrome 10-25, Safari 5.1-6 */ /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}   

</style>