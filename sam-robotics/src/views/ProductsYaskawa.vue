<template>
 <section class="about container-fluid p-0">
    <div class="row align-items-center  animate__fadeIn animate__animated">
    <header class="col-12 animate__slideInLeft animate__animated blue--bg d-flex align-self-center justify-self-center">
        <h1 class="m-auto text-center align-self-center justify-self-center">{{ $route.name }}</h1>
      </header>
    </div>
    <div class="row align-items-center container text-left m-auto no-gutters vh-50">
      <div class="col-12 animate__slideInRight animate__animated p-4">

        <h2 class="h1 mt-4 pt-4">Produse</h2>
        <p> Serviciile noastre acopera urmatoarea gama de produse Yaskawa. Daca doriti informatii despre un alt produs din gama Yaskawa si nu este in lista de mai jos va rugam sa ne scrieti un mesaj folosind pagina de <router-link to="/contact">contact</router-link> si va vom ajuta in cel mai scurt timp posibil.</p>
        <hr />  
       
        <div  class="row">
          <div class="col-xs-6 col-md-4" v-for="product in products" :key="product.name">
            <div class="card m-1">
              <div class="card-body">
                <img v-bind:src="product.image" class="card-img-top img-fluid" :alt="product.image">
                <h5 class="card-title">{{ product.name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Detalii</h6>
                <p class="card-text" v-html="product.applications"></p>
                <p class="card-text">{{ product.payload }}</p>
                <p class="card-text">{{ product.maxworkingrange }}</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</template>

<script>

export default {
  name:'products',
  data(){
    return {
      products:[{ 
        applications: "Assembly, Packaging, Material Handling , Sorting, Dispensing, Machine Tending,",
        maxworkingrange: "Max. Working Range (mm)350",
        name: "MotoMINI",
        payload: "Payload (kg) 0.5",
        image:require('../assets/products/motomini.png')
      }, {
        applications: "Assembly, Pick and place, Dispensing, Machine Tending, Material Handling, Packaging",
        maxworkingrange: "Max. Working Range (mm)927",
        name: "GP7",
        payload: "Payload (kg) 7",
        image:require('../assets/products/gp7.jpg')
      }, {
        applications: "Assembly, Pick and place, Dispensing, Machine Tending, Material Handling, Packaging",
        maxworkingrange: "Max. Working Range (mm)727",
        name: "GP8",
        payload: "Payload (kg) 8",
        image:require('../assets/products/gp8.jpg')
      }, {
        applications: "Handling, Machine Tending, Material Handling, Packaging, Arc Welding, Processing, Plasma Cutting",
        maxworkingrange: "Max. Working Range (mm)1440",
        name: "GP12",
        payload: "Payload (kg) 12",
        image:require('../assets/products/gp12.jpg')
      }, {
        applications: "Packaging, Assembly, Dispensing, Material Handling, Material Removal",
        maxworkingrange: "Max. Working Range (mm)2538",
        name: "GP35L",
        payload: "Payload (kg) 35",
        image:require('../assets/products/gp35l.jpg')
      }, {
        applications: "Dispensing, Material Handling, Material Removal, Packaging",
        maxworkingrange: "Max. Working Range (mm)2061",
        name: "GP50",
        payload: "Payload (kg) 50",
        image:require('../assets/products/gp50.jpg')
      }, {
        applications: "Dispensing, Material Cutting, Material Handling, Press Tending",
        maxworkingrange: "Max. Working Range (mm)2236",
        name: "GP88",
        payload: "Payload (kg) 88",
        image:require('../assets/products/gp88.jpg')
      }, {
        applications: "Assembly. Dispensing, Material Handling, Material Removal, Packaging",
        maxworkingrange: "Max. Working Range (mm)2236",
        name: "GP110",
        payload: "Payload (kg) 110",
        image:require('../assets/products/gp110.jpg')
      }, {
        applications: "Material Handling, Machine Tending, Press Tending",
        maxworkingrange: "Max. Working Range (mm)2702",
        name: "GP180",
        payload: "Payload (kg) 180",
        image:require('../assets/products/gp180.jpg')
      }, {
        applications: "Material Handling, Machine Tending, Press Tending",
        maxworkingrange: "Max. Working Range (mm)3058",
        name: "GP180-120",
        payload: "Payload (kg) 120",
        image:require('../assets/products/gp180-120.jpg')
      }, {
        applications: "Machine Tending, Material Handling, Press Tending",
        maxworkingrange: "Max. Working Range (mm)2446",
        name: "GP280",
        payload: "Payload (kg) 280",
        image:require('../assets/products/gp280.jpg')
      }, {
        applications: "Material Cutting, Material Handling, Press Tending",
        maxworkingrange: "Max. Working Range (mm)2942",
        name: "GP400",
        payload: "Payload (kg) 400",
        image:require('../assets/products/gp400.jpg')
      }, {
        applications: "Assembly, Dispensing, Material Handling, Material Removal, Packaging",
        maxworkingrange: "Max. Working Range (mm)2942",
        name: "GP600",
        payload: "Payload (kg) 600",
        image:require('../assets/products/gp600.jpg')
      }]
    }
  },
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
.vh-50{
  min-height: 50vh;
}
</style>
