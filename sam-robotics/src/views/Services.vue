<template>
  <section class="about container-fluid p-0">
    <div class="row align-items-center  animate__fadeIn animate__animated">
    <header class="col-12 animate__slideInLeft animate__animated blue--bg d-flex align-self-center justify-self-center">
        <h1 class="m-auto text-center align-self-center justify-self-center">{{ $route.name }}</h1>
      </header>
    </div>
    <div class="row align-items-center container text-left m-auto no-gutters vh-50">
      <div class="col-12 animate__slideInRight animate__animated p-4">
        <p class="text-left"> Societatea SAM Robotics,cu o experienta in domeniu de peste un deceniu, ofera o gama de servicii variata pentru roboti inustriali precum:</p>
        <ul>
          <li>
            Examinarea robotiilor in scopul determinarii necesitatiilor de mentenanta sau reparare
          </li>
          <li>
            Asistenta technica si/sau montarea si punerea in functiune a robotiilor industriali
          </li>
          <li>
            Instalarea, actualizarea si creerea de backupa softurilor folosite de diferite modele de roboti industriali
          </li>
          <li>
            Achizitionarea si vanzarea robotiilor industriali
          </li>
          <li>
            Asistenta technica in materie de roboti industriali
          </li>
        </ul>
        <p>Pentru o mai mare performanta in a creste productia dumneavoastra, robotii industriali au o mare gama de utiliare acestia putand fi folositi in industrii precum:</p>
        <ul>
          <li> industria alimentara</li>
          <li> agricultura</li>
          <li>  automotiva</li>
          <li> sanitara</li>
          <li> farmaceutica</li>
          <li> distributie si impachetare</li>
        </ul>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/kM2CBrVuYDE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
      </div>
    </div>
    </section>
</template>

<script>
export default {
  name:'about',
  components: {
  },
  methods:{
  },
}
</script>

<style lang="scss" scoped>
header{
  min-height:30vh;
}

</style>
