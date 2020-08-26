<template>
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark container fixed-top p-2">
      <router-link class="navbar-brand logo" to="#"><span class="blue">S</span><span class="red">AM</span> Robotic<span class="blue">s</span></router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <router-link class="nav-link" to="/">Home <span class="sr-only">(current)</span></router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about">Despre noi</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/services">Servicii</router-link>
          </li>
          <li class="nav-item dropdown">
            <router-link class="nav-link dropdown-toggle" to="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produse
            </router-link>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <router-link class="dropdown-item" to="#">Action</router-link>
              <router-link class="dropdown-item" to="#">Another action</router-link>
              <div class="dropdown-divider"></div>
              <router-link class="dropdown-item" to="#">Something else here</router-link>
            </div>
          </li>
         <li class="nav-item">
            <router-link class="nav-link" to="/contact">Contact</router-link>
          </li>
        </ul>
      </div>
    </nav>
    <router-view />
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
            <p>Distributor & Partener</p>
            <img src="@/assets/yaskawa.png" width="128" >
          </div>
          <div class="col-sm-12 col-md-3 text-right">
            <img src="@/assets/sam_logo.jpg" width="128" >
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
  methods:{
    goHome(){
      this.$router.push('/')
    },
    postMessage(){
      this.sending=true;
      fetch('http://claptrap.myddns.me:7920/trello',{
        method:'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
        name: this.name,
        surname: this.surname,
        company: this.company,
        email: this.email,
        phone:this.phone,
        message: this.message
      })
      }).then((response)=> response.json()).then(()=>{
        this.sending=false;
        this.success = true;
        const thisObj = this;
        setTimeout(function(){
          thisObj.success = false;
        },3000);
      }).catch((error)=>{
        console.log(error);
        const errorMsg = document.querySelector('.invalid-feedback');
        errorMsg.style.display="block";
        errorMsg.innerText = "Error! Va rugam incercati din nou.";
        
        setTimeout(function(){
          errorMsg.style.display="none"
        },3000);
        this.sending=false;
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
nav{
  @media screen and (max-width:960px) {
    width: 100%;
    margin:1em;
  }
  font-size: 120%;
}
.logo{
  text-shadow: 1px 1px 0px #222 !important;
}
.nav-item >a{
  text-shadow: 1px 1px 0px #222 !important;
}
.blue{
  color: #0096c7;
  &--bg{
    background: #0096c7;
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
</style>
