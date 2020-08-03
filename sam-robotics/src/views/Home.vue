<template>
  <main class="container-fluid vh-100">
    <section class="row h-100 no-gutters">
      <aside class="col-xs-12 col-md-5 left">
       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="~@/assets/y2.jpeg" class="d-block vh-100 w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="~@/assets/y3.jpeg" class="d-block vh-100 w-100" alt="...">
          </div>
            <div class="carousel-item active">
            <img src="~@/assets/y4.jpeg" class="d-block vh-100 w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </aside>
      <div class="col-xs-12 col-md-7 right">
        <div class="row h-100 no-gutter flex-column">
          <nav class="navbar navbar-expand-lg navbar-light align-items-start">
            <a class="navbar-brand pl-3"  href="http://www.sam-robotics.ro"><img src="~@/assets/sam_logo.jpg" height="96" style="height:96px !important"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto align-items-end">
                <li class="nav-item active mt-4">
                  <router-link to="services" class="text-right font-weight-bold">Servicii si produse</router-link>
                </li>
                <li class="nav-item mt-4 pt-4">
                  <router-link to="about" class="text-center  font-weight-bold">
                    Despre noi
                  </router-link>
                </li>
                <li class="nav-item dropdown  mt-4 pt-4">
                  <router-link to="news"  class="text-center font-weight-bold">Noutati si Info</router-link>
                </li>
                <li class="nav-item  mt-4 pt-4">
                  <router-link to="contact" class="text-center font-weight-bold">Contact</router-link>
                </li>
              </ul>
            </div>
          </nav>
          <h2 class="align-self-center justify-self-center p-4 text-center m-auto text-uppercase">
            Prima alegere in consultanta, mentenanta si reparatii a robotilor industriali si a echipamentelor de automatizare industriale
          </h2>
          <PageFooter class="footer"/>
        </div>
      </div>
    </section>
  </main>
</template>

<script>
import PageFooter from "@/components/PageFooter";

export default {
  name: 'home',
  components: {
    PageFooter
  }
}

</script>

<style lang="scss" scoped>
.container-fluid{
  @media screen and (min-width: 960px){
    padding-left:0;
  }
}
.vh-100 img{
  @media screen and (max-width: 960px){
    height:200px !important;
  }
}

.left{
  background: rgb(165,1,4);
  background: linear-gradient(180deg, rgba(165,1,4,1) 35%, rgba(0,150,199,1) 100%); 
  position:relative;
  @media screen and (max-width: 960px){
    height:200px !important;
  }
}

.right{
  min-height:100%;
}
.footer{
  text-align:right !important;
  width:100%;
  padding-right:1rem !important;
}

.border-grey{
  border: 5px solid rgb(27, 27, 27);
}

ul{
  flex-direction: column !important;
  & > li{
    flex-grow: 1;
    & > a {
    @media screen and (min-width: 960px){
      text-transform: uppercase;
      padding:1rem;
      background:rgba(0,0,0,0.6);
      color:white;
      transition:all linear 0.2s;
      &:hover{
        transition:all linear 0.2s;
        color:#0096c7;
        }
      }
    }
  }
}
</style>
