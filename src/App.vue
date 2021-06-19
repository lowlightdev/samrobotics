<template>
  <main class="container-fluid p-0 m-0">
    <div class="row hv-100">
      <div class="col-4 align-self-center">
        <img src="@/assets/sam_logo.png" class="logo"/>
      </div>
      <div class="col-8 align-self-center text-start border border-danger border-right-0 border-top-0 border-bottom-0">
        <h1>Our new website is coming soon!</h1>
  
        <ul class="social-media">
          <li>
            <i class="fas fa-phone pe-2"></i> {{phone}}
          </li>
          <li>
            <a :href="`mailto:${email}`"><i class="far fa-envelope"></i>
          </a>   {{email}}
          </li>
          <li>
            <a :href="facebook"><i class="fab fa-facebook"></i>
            <span></span> {{facebook}}</a>
          </li>
        </ul>
        <small class="copyright">copyright <i class="far fa-copyright fa-sm"></i> <a href="https://sam-robotics.ro">SAM Robotics</a></small>
      </div>
    </div>
    <!-- <router-view/> -->

  </main>
</template>
<script>
export default {
   data(){
    return {
      email:"office@sam-robotics.ro",
      facebook:"https://facebook.com/SamRoboticsRomania",
      phone:" +40 722 363 086"
    }
  },
}
</script>

<style lang="scss">
:root{
  --red:#A50104;
  --blue:#0096c7;
  --blue-dark:#01428d;
  --white:#f7f7f7;
}

html,body{
  padding:0;
  margin:0;
  width:100%;
  max-height:100vh;
  overflow: hidden;
}

#app {
  font-family: 'Noto Sans JP', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  background:var(--white);
  min-height:100vh;
}
a{
  color:var(--red);
}
main{
  min-height: 100vh;
}

.navbar{
  top:0;
  background:var(--white);
  z-index:9999;
}
.logo{
  max-width:256px;
}
.hv-100{
  height:100vh;
}
.nav-link{
  &.active{
    background:var(--red);
    color:var(--white) !important;
  }
}

.text{
  &-red{
    color:var(--red);
  }
  &-blue{
    color:var(--blue);
  }
}
.grid-container{
  height: 100%;
  display:grid;
  grid-template-columns: 1fr;
  grid-template-rows: auto 1fr auto;
}

.social-media{
  list-style-type: none;
  align-self: start;
  text-align: left;
  margin:0;
  padding:0;
  & li{
    padding: 10px 0px;
  }
}


</style>
