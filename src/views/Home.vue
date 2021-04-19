<template>
  <div class="home">

    <banner-section/>

    <div class="row row-cols-1 row-cols-md-2 g-4 mt-4 pb-4">
      <div class="col">
        <div class="card bg-light p-4" style="background-image:url('https://uicookies.com/demo/theme/metalindustry/img/welcome.jpg');">
          <div class="card-body pt-4" >
            <h3 class="card-title text-start pt-4"><i class="fas fa-tools"></i> Mentenanta si reparatii</h3>
            <p class="card-text text-start">Echipa noastra ofera mentenanta, reparatii, ajustari robotiilor la cea mai inalta calitate si cele mai inalte standarde oferite de o echipa pregatita pentru orice situatie.</p>
          </div>
        </div>
      </div>
      <div class="col" >
        <div class="card bg-light p-4"  style="background-image:url('https://uicookies.com/demo/theme/metalindustry/img/slide1.jpg');">
          <div class="card-body pt-4">
            <h3 class="card-title text-start pt-4"><i class="fas fa-award"></i> Calitate, siguranta, incredere</h3>
            <p class="card-text text-start ">Cu o experienta de peste 8 ani in domeniu, calitatea serviciilor noastre este prioritatea noastra iar doavada o fac clientii multumiti si renumele acitivatatii noastre in domeniu.</p>
          </div>
        </div>
      </div>
    </div>

      <div class="row mt-4 pb-4 text-start">
        <div class="col-sm-12 col-lg-6">
          <div class="p-4 bg-light">
            <img src="https://images.pexels.com/photos/830891/pexels-photo-830891.jpeg?cs=srgb&dl=pexels-philipp-birmes-830891.jpg&fm=jpg" class="px-4 img-fluid"/>
            <h3 class="p-4">Despre S.C SAM-ROBOTICS S.R.L</h3>
            <p  class="px-4">Am inceput activitate in anul 2008 si de peste un deceniu suntem acitiv pe piata de roboti industriali din Romania. SAM-Robotics este o companie acreditata de Yaskawa si suntem mandrii si mereu pregatit sa oferim clientiilor nostrii cele mai inalte standarde.</p>
            <div  class="px-4"><router-link to="/about" class="btn btn-primary px-4">Afla mai multe</router-link></div>
          </div>
      
        </div>
        <div class="col-sm-12 col-lg-6 text-start ">
          
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kM2CBrVuYDE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
      </div>
 
   </div>
</template>

<script>
// @ is an alias to /src
import BannerSection from '../components/BannerSection.vue'

export default {
  name: 'Home',
  components: {
    BannerSection
  },
  data(){
    return {
      cards:[
        {
          title:'Yaskawa',
          text:'Detalii',
          img:'https://www.yaskawa.eu.com/assets/images/logo.png',
          link:'https://www.yaskawa.eu.com/',
        },
        {
          title:'Sincosald',
          text:'Detalii',
          img:'http://www.sincosald.it/images/logo.png',
          link:'http://www.sincosald.it',
        },
        {
          title:'Zakmet',
          text:'Detalii',
          img:'https://zakmet.pl/wp-content/uploads/ZAKMET_logo_light.svg',
          link:'https://zakmet.pl'
        },
        {
          title:'Hyperterm',
          text:'Detalii',
          img:'https://www.hypertherm.com/globalassets/common/logo_ht_shapingpossibility_185x44.png',
          link:'https://www.hypertherm.com',
        }
      ]
    }
  }
}
</script>
<style lang="scss" scoped>
.card{
  background-size:cover;
  color:white;
  transition: 0.25s all ease-in;
}
.list-group-item{
  display: flex;
  justify-content: space-between;
  height: 100%;
  align-items:center;
}
</style>

