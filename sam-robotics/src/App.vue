<template>
  <div id="app">
    <div class="navigation container-fluid" :class="isMobile ? 'bg-dark':'fixed-top'">
      <nav class="navbar navbar-expand-lg navbar-dark container" >
        <a class="navbar-brand logo" href="http://www.sam-robotics.ro">
          <img src="@/assets/sam_logo.png" width="128" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" :class="$route.name =='Home' ? 'active':''">
              <router-link class="nav-link" to="/">Home <span class="sr-only">(current)</span></router-link>
            </li>
            <li class="nav-item" :class="$route.name =='Despre Noi' ? 'active':''">
              <router-link class="nav-link" to="/about">Despre noi</router-link>
            </li>
            <li class="nav-item" :class="$route.name =='Noutati si Info' ? 'active':''">
              <router-link class="nav-link" to="/news">Noutati</router-link>
            </li>
            <li class="nav-item" :class="$route.name =='Servicii' ? 'active':''">
              <router-link class="nav-link" to="/services">Servicii</router-link>
            </li>
            <li class="nav-item dropdown" :class="$route.path.includes('products') ? 'active':''">
              <router-link class="nav-link dropdown-toggle" to="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produse
              </router-link>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <router-link class="dropdown-item" to="/products/yaskawa">Yaskawa Industrial Robots</router-link>
                <div class="dropdown-divider"></div>
                <router-link class="dropdown-item" to="/products/partners">Parteneri si afiliati</router-link>
              </div>
            </li>
          <li class="nav-item" :class="$route.name =='Contact' ? 'active':''">
              <router-link class="nav-link" to="/contact">Contact</router-link>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div  class="mvh-100">
      <router-view v-if="loading"/>
      <div class="row align-items-center mvh-100 text-center" v-else>
        <div class="col-12">
          <div class="spinner-grow text-primary" style="height:4rem; width:4rem" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>
    </div>

    <footer class="p-4">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-left col-md-6">
            <h4 class="bold blue"> Contact</h4>
            <ul class="text-left ml-0 pl-0">
              <li class="pb-1 pt-1">
                <font-awesome-icon icon="map-marker-alt" /> {{ address }}
              </li>
              <li class="pb-1 pt-1">
                <font-awesome-icon icon="phone"/>  {{ contact }}
              </li>
              <li class="pb-1 pt-1">
                <font-awesome-icon icon="at"/>  {{ mail }}
              </li>
              <li class="pb-1 pt-1">
                <font-awesome-icon :icon="['fab','facebook-square']"/>  <a :href="facebook">{{ facebook }}</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-3 text-right">
            <iframe loading="lazy" :src="maps" width="100%" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="col-sm-12 col-md-3 text-right">
            <p><img src="@/assets/sam_logo.jpg" width="128" ></p>
            <p>Distributor & Partener</p>
            <p><img src="@/assets/yaskawa.png" width="128" ></p>
          </div>
        </div>
        <div class="row">
          <div class="col text-left">
            <small class="text-smer">       <font-awesome-icon icon="code"/> with       <font-awesome-icon icon="heart"/>
              by <a href="http://victorz.me">@lowlightdev</a>
            </small>
          </div>
          <div class="col text-right">
            <small>copyright <a href="http://sam-robotics.ro">SAM Robotics S.R.L</a> @ {{ new Date().getFullYear() }}</small>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>
<script>

export default {
  data(){
    return{
      isMobile:window.innerWidth < 980 ? true : false,
      loading:false,
      address:"Doctor Pavel Vasici Ungureanu 12A, 300489, Timisoara",
      contact:" +40 722 363 086",
      mail:"office@sam-robotics.ro",
      facebook:"https://facebook.com/SamRoboticsRomania",
      maps:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.70971906125!2d21.2098532159288!3d45.736915979105156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d0aebaaee37%3A0xf65c7e24b66e4115!2sStr.%20Dr.%20Pavel%20Vasici%20Ungureanu%2012a%2C%20Timi%C8%99oara%20300489%2C%20Romania!5e0!3m2!1sen!2suk!4v1594726703629!5m2!1sen!2suk",
      name:"",
      surname:"",
      company:"",
      email:"",
      message:"",
      phone:"",
      gdpr:false,
      success:false,
      sending:false
    }
  },
  components: {
  },
  mounted(){
    this.scroll()
    setTimeout(()=>{
      this.loading = true;
    },500)
    
  },
  methods:{
   scroll(){
     window.addEventListener('scroll',()=>{
       if(window.scrollY > 150){
         document.querySelector('.navigation').style.backgroundColor = 'rgba(255,255,255,0.8)';
       } else {
         document.querySelector('.navigation').style.backgroundColor = 'transparent';
       }
     })
   }
  },
}
</script>
<style lang="scss">
html,body, #app{
  font-family: 'Roboto', sans-serif !important;
}
.vh-50{
  min-height: 50vh;
}
.container{
  @media screen and (max-width:960px) {
    padding: 0;
  }
}
.navigation{
  transition: 0.3s all linear;
}
nav{
  @media screen and (max-width:960px) {
    width: 100%;
  }
  font-size: 120%;
}
.nav-item >a{
  text-shadow: 1px 1px 0px #111 !important;
}
.blue{
  color: #0096c7;
  &--bg{
    background:linear-gradient(to bottom,rgba(0,0,0,0.5),#0096c7), #0096c7;
  }
}
.red{
  color: #a50104;
  &--bg{
    background: #a50104;
  }
}
footer{
  background-color: rgb(24, 27, 29);
  color: white;
}
.text-smer{
    font-size:70%;
}
.mvh-100{
  min-height: 100vh;
}
</style>
