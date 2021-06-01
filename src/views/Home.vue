<template>
  <section class="custom-white ">

    <img src="https://ifr.org/img/uploads/Yaskawa_1030_klein.jpg" style="width:100%;height:500px;"/>
    
    <div class="container">
      <div class="row py-4">
        <div class="col-12 text-start">
            <h1>Serviciile noastre</h1>
            <p class="pt-4"> Oferim o gama variata de servicii in materie de roboti industriali din gama <a href="https://www.yaskawa.eu.com/"><b>Yaskawa Robotics Division (MOTOMAN)</b></a> precum mententata, instalare, support technic, backup software. Cu o echipa pefromanta cu peste 10 ani vechime.</p>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="card h-100">
            <div class="card-img-top bg-1"></div>
            <div class="card-body">
              <h5 class="card-title">Instalare si Mentenanta</h5>
              <p class="card-text">Oferim servicii de mentenanta, instalare si calibrare pentru roboti industriali.</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="card h-100">
            <div class="card-img-top bg-2"></div>

            <div class="card-body">
              <h5 class="card-title">Asistenta si suport technic</h5>
              <p class="card-text">Asistenta technica pentru roboti industrali din gama de produse acoperita.</p>
            </div>
          </div>
        </div>
       
      </div>
    </div>

    <section class="scroll-background my-4 py-4">
      <div class="container">
        <div class="row">
        <div class="col-xs-12 col-md-6">
              <i class="fas fa-tasks fa-3x"></i> 
              <h1 class="text-blue"> +{{projects}} </h1>
              <p> de proiecte!</p>
            </div>
        <div class="col-xs-12 col-md-6">
            <i class="fas fa-users fa-3x"></i> 
            <h1 class="text-blue"> +{{clients}} </h1>
            <p > clienti multumiti!</p>
          </div>
        </div>
      </div>
    </section>

  <div class="container">
      <div class="row pb-4">
        <div class="col-12 text-start">
            <h1 class="pb-4">Produse</h1>
            <p>Gama de produse Yaskawa Motoman ofera cea mai înaltă calitate de pe piata, avand peste 100 de ani de performanta si progress technic.</p>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="card h-100">
            <div class="card-img-top bg-robots"></div>
            <div class="card-body">
              <h5 class="card-title">MOTOMAN Robots</h5>
              <p class="card-text">Cea mai înaltă calitate oferind performanțe remarcabile</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="card h-100">
            <div class="card-img-top bg-ac"></div>

            <div class="card-body">
              <h5 class="card-title">AC Drives</h5>
              <p class="card-text">Drivere industriale de cea mai înaltă calitate,cu performanțe remarcabile</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</template>

<script>
// @ is an alias to /src

export default {
  name: 'Home',
  components: {
  },
  data(){
    return {
      clientsNr:1000,
      projectsNr:100,
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
    for(let i =0;i<this.projectsNr;i++){
        setTimeout(()=>{
          this.projects++;
      },250)
    }
  }
}
</script>

<style lang="scss" scoped>
.img-fluid{
  width:100%;
  max-height:100%;
}
.custom-white{
  background-color:var(--white);
}
.scroll-background{
  background: linear-gradient(
          rgba(0, 0, 0, 0.6), 
          rgba(0, 0, 0, 0.6)
        ),
        url('~@/assets/clients_satisfy.jpg');
  background-size:100%;
  color:white;
  background-position: center;
}
.card-img-top{
  height:250px;
  width:100%;
}

.bg-motion{
  background-image:url('~@/assets/motion_control.webp');
  background-size:cover;
  background-position:center;
}

.bg-robots{
  background-image:url('~@/assets/bg1.webp');
  background-size:cover;
  background-position:center;
}
.bg-ac{
  background-image:url('~@/assets/ac_drives.webp');
  background-size:cover;
  background-position:center;
}
.bg-1{
background-image:url('~@/assets/bg1.webp');

}
.bg-2{
background-image:url('~@/assets/bg2.webp');
background-size:cover;
background-position:bottom;
}
.bg-3{
background-image:url('~@/assets/bg3.webp');
background-size:cover;
background-position:center;
}
</style>
