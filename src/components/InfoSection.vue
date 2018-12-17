<template>
    <div class="container-fluid p-0 m-0">
        <div class="col-12 my-4 py-4 left" :class="{ 'color': $props.position =='left' }" v-if="$props.position == 'left'">
          
            <section class="row align-items-center py-4 my-4">
              
                <div class="col-sm-12 col-lg-6 col-xl-6">
                  <img src="@/assets/left.png" class="img-fluid"/>
                </div>
                
                <div class="col-sm-12 col-lg-6 col-xl-6">
                    <h1 class="py-1">Partener oficial <a href="https://www.yaskawa.eu.co">YASKAWA</a></h1>
                    <p>
                        <a href="http://sam-robotics.ro">SAM Robotics</a> Romania este o companie acreditata <a href="https://www.yaskawa.eu.com">YASKAWA</a> si parteneri oficiali ai acesteia in Romania. Suntem service patrener autorizat, partener de vanzari, partener de sistem si partener de performanta toate a putea oferii cele mai inalte servicii si inova impreuna.
                    </p>
                    
                    <div class="text-right"><a href="#" class="btn btn-outline-primary">Viziteaza YASKAWA Motoman</a></div>
                </div>
                
            </section>
            
        </div>
        <div class="col-12 my-4 py-4"  v-if="$props.position == 'right'">
             <section  class="row align-items-center">
                            
                <div class="col-sm-12 col-lg-6 col-xl-6">
                    <h1 class=py-1>Cate ceva despre noi</h1>
                    <p>
                    Societatea SAM Robotics este reprezentantul oficial din 2008, in Romania pentru: Yaskawa Robotics Division (MOTOMAN) care este unul din liderii mondiali in conceperea, productia, implementarea si comercializarea de celule robotizate si roboti industriali cu diverse domenii de aplicabilitate in industrie, cercetare si invatamint. Supunem atentiei dumneavoastra aceasta gama de servicii si produse, prin statulul nostru de distribuitor autorizat in Romania. Pe langa aceasta colectivul nostru va ofera si o intreaga gama de echipamente, unelte si accesorii necesare sectorului de confectii si constructii metalice.


                    </p>
                </div>
                
                <div class="col-sm-12 col-lg-6 col-xl-6">
                    <iframe height="315" class="shadow-sm p-3 mb-5 bg-white rounded w-100" src="https://www.youtube.com/embed/kM2CBrVuYDE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
export default {
  name: 'InfoSection',
  props: {
      position:String
  },
  mounted(){
  }
}   
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" scoped>
    .color{
        background-color:rgba(#ccc,0.1);    
    }
    .img-fluid{
        max-height:250px;
    }
    section{
        margin:auto;
        max-width:1140px;
    }
    .left{
        background-image:url('/img/1.png');
        background-repeat:no-repeat;
        background-size:contain;
        background-position:left top;
    }
</style>
