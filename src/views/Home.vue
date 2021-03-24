<template>
  <div class="home">
    <banner-section msg="Welcome to Your Vue.js App"/>
    <h1 class="container">Gama de produse</h1>
    <div class="group-card container">
      <div class="card" v-for="card in cards" :key="card.title">
          <div class="row g-0 align-items-center">
            <div class="col-md-4 ">
                <img :src="card.img" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8 ">
              <div class="card-body">
                <h5 class="card-title"><b>{{card.title}}</b></h5>
                <a :href="card.link" class="card-text pt-2">{{card.text}} <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
       
      </div>
      <div class="about">
        <div class="left">
          <h3>S.C SAM-ROBOTICS S.R.L</h3>
          <p>Am inceput activitate in anul 2008 si de peste un deceniu suntem acitiv pe piata de roboti industriali din Romania. SAM-Robotics este o companie acreditata de Yaskawa si suntem mandrii si mereu pregatit sa oferim clientiilor nostrii cele mai inalte standarde.</p>
          <div><router-link to="/about" class="btn btn-primary px-4">Afla mai multe</router-link></div>
        </div>
        <div class="right">
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
.group-card{
  padding-top:3rem;
  padding-bottom: 3rem;
  display:grid;
  gap:3rem;
  @media screen and (min-width:720px) {
    grid-template-columns: repeat(3,1fr);   
  }
}
.card{
  border-radius:25px !important;
  padding:1rem;
  align-items:center;
  transition:0.15s all ease-in;
  text-align: left;
  position:relative !important;
  cursor:pointer;
  z-index: 99999 !important;
  background:white;
  box-shadow: 0 2px 0px var(--primary);
  &:hover{
    box-shadow: 0 5px 0px var(--primary);
    transform: scale(0.99);
  }
}
h1{
  text-align: left;
  font-weight: 900;
  padding-top:5rem;
  color:var(--secondary);
  text-transform: uppercase;
}
.about{
  text-align: left;
  margin-top:3rem;
  margin-bottom:3rem;
  display:grid;
  grid-template-columns: 1fr 1fr;
  background: #ED213A;  /* fallback for old browsers */
  background: url("~@/assets/robot.png"), linear-gradient(to right, #93291E, #ED213A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background-position:left bottom	;
  background-repeat: no-repeat;
  background-clip: padding-box;
  color:white;
  text-shadow: 1px 1px 2px #222;
  & .left{
    padding:1rem;
    height:100%;
    display: flex;
    max-width:500px;
    margin:auto;
    flex-direction: column;
    justify-content: center;
    justify-items: center;
    & > h3 {
      font-weight: 700;
      padding-bottom:2rem;
    }
  }
  & .right{
    background:url('~@/assets/banner.jpg');
    background-size: cover;
    min-height:400px;
  }
}

</style>

