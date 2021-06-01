<template>
  <main class="home">

    <section class="home-content">
      <img src="@/assets/sam_logo.png" class="logo"/>
      <div class="home-content__about">
        <h1> Specialisti in industria robotilor industriali</h1>
        <p class=""> Societatea <b>SAM Robotics</b> este reprezentantul oficial din 2008, in Romania pentru: <a href="https://www.yaskawa.eu.com/"><b>Yaskawa Robotics Division (MOTOMAN)</b></a> care este unul din liderii mondiali in conceperea, productia, implementarea si comercializarea de celule robotizate si roboti industriali cu diverse domenii de aplicabilitate in industrie, cercetare si invatamint.<br> Supunem atentiei dumneavoastra aceasta gama de servicii si produse, prin statulul nostru de distribuitor autorizat in Romania. Pe langa aceasta colectivul nostru va ofera si o intreaga gama de echipamente, unelte si accesorii necesare sectorului de confectii si constructii metalice.</p>
      </div>

      <ul class="home-contact">
        <li>
          <i class="fab fa-facebook fa-lg"></i>
          <span><a :href="facebook">{{facebook}}</a></span>
        </li>
        <li>
          <i class="far fa-envelope fa-lg"></i>
          <span><a :href="`mailto:${email}`">{{email}}</a></span>
        </li>
        <li>
          <i class="fas fa-phone-alt fa-lg"></i>
          <span>{{phone}}</span>
        </li>
        <li>
          <i class="fas fa-map-marker-alt fa-lg"></i>
          <span><a :href="maps">{{address}}</a></span>
        </li>
      </ul>
      <small class="copyright">copyright <i class="far fa-copyright fa-sm"></i> <a href="https://sam-robotics.ro">SAM Robotics</a></small>
    </section>

    <aside class="home-aside">
      <img src="https://ifr.org/img/uploads/Yaskawa_1030_klein.jpg" class="home-aside-img"/>
      
      <div class="additional-content"> 
        <p style="border-right: 5px solid;">
          <i class="fas fa-tasks fa-3x"></i> 
          <span class="clients-nr"> +{{projects}} </span><br> 
          <span style="font-size:2em"> proiecte!</span>
        </p>
        <p>
          <i class="fas fa-users fa-3x"></i> 
          <span class="clients-nr"> +{{clients}} </span><br> 
          <span style="font-size:2em"> clienti multumiti!</span>
        </p>
      </div>

    </aside>

  </main>
</template>

<script>
// @ is an alias to /src

export default {
  name: 'Home',
  components: {
  },
  data(){
    return {
      address:"Doctor Pavel Vasici Ungureanu 12A, 300489, Timisoara",
      phone:" +40 722 363 086",
      email:"office@sam-robotics.ro",
      facebook:"https://facebook.com/SamRoboticsRomania",
      maps:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.70971906125!2d21.2098532159288!3d45.736915979105156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d0aebaaee37%3A0xf65c7e24b66e4115!2sStr.%20Dr.%20Pavel%20Vasici%20Ungureanu%2012a%2C%20Timi%C8%99oara%20300489%2C%20Romania!5e0!3m2!1sen!2suk!4v1594726703629!5m2!1sen!2suk",
      clientsNr:1000,
      clients:0,
      projects:0
    }
  },
  mounted(){
    for(let i =0;i<this.clientsNr;i++){
        setTimeout(()=>{
          this.clients++;
      },250)
    }
    for(let i =0;i<this.clientsNr;i++){
        setTimeout(()=>{
          this.projects++;
      },250)
    }
  }
}
</script>

<style lang="scss" scoped>

.home{
  display:grid;
  width:100%;
  height:100vh;
  grid-template-areas:"aside"
  "content";
  text-align:left;
  @media screen and (min-width:960px) {
    grid-template:"content aside" / 1fr 1fr;
    place-items:center;
  }
  a{
    color:var(--blue-dark);
    text-decoration: none;
  }
  & h1, h2 {
    color:var(--blue);
  }
  & h1 {
    font-size:2.5em;
  }
  & h2{
    font-size:2em;
  }
  &-content{
    padding-left:50px;
    padding-right:50px;
    grid-area:content;
    display:grid;
    grid-template-columns: 1fr;
    justify-content: space-between;
    height:85%;
    & p {
      text-align: justify;
    }
  }
  &-aside{
    grid-area:aside; 
    width:100%;
    place-items: flex-end;
    display: grid;
    @media screen and (min-width:960px) {
      height:90%;
    }
    &-img{
      width: 100%;
      border-bottom-left-radius: 15px;
      @media screen and (min-width:960px) {
        border-top-left-radius: 15px;
        width: 90%;
        height:90%;
      }
    }
    & div {
      text-align: center;
      place-self: center;
      font-weight: bold;
    }
  }
  
  &-contact{
    margin:0;
    padding:0;
    list-style-type: none;
    width:100%;
    align-self:end;
    & li {
      margin-top:1em;
      display:grid;
      grid-template-columns: auto 1fr;
      gap:10px;
      place-items: center;
      & > i {
        min-width:20px;
        color:var(--red);
      }
      & span{
        place-self:flex-start;
      }
    }
  }
}
.clients-nr{
  font-size:3em;
  color:var(--red);
}
.logo{
  max-width:128px;
}
.copyright{
  padding-top:15px;
  padding-bottom:15px;
  align-self:end;
}
.additional-content{
  display:grid;
  grid-template-columns: 1fr 1fr;
  gap:30px;
  text-align: center;
}
</style>
