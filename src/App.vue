<template>
  <main class="grid-container container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light position-sticky">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="@/assets/sam_logo.png" class="logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <router-link class="nav-link" :class="{'active': $route.name == 'Home' }" aria-current="page" to="/">Acasa</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/about"  :class="{'active':$route.name == 'About'}">Despre noi</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <router-view/>

    <footer class="footer py-1">
      <div class="container">
        <small class="copyright">copyright <i class="far fa-copyright fa-sm"></i> <a href="https://sam-robotics.ro">SAM Robotics</a></small>
        <ul class="social-media">
          <li>
            <i class="fas fa-phone pe-2"></i> {{phone}}
          </li>
          <li>
            <a :href="`mailto:${email}`"><i class="far fa-envelope"></i>
            <span></span></a>
          </li>
          <li>
            <a :href="facebook"><i class="fab fa-facebook"></i>
            <span></span></a>
          </li>
          <li>
            <router-link to="/about"><i class="fas fa-map-marker-alt "></i>
            </router-link>
          </li>
        </ul>
      </div>
    </footer>
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
  min-height:100vh;
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
  max-width:96px;
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
.footer{
  color:white;
  text-align:left;
  & .container{
    display:grid;
    grid-template-columns: 1fr auto;
  }
  background:#222;
}

.social-media{
  & a{
    color:var(--white) !important;
  }
  margin:auto;
  list-style-type: none;
  display:grid;
  gap:30px;
  grid-template-columns: auto auto auto auto;
}


</style>
