<template>
  <div class="container-fluid p-0 m-0">
    <div class="row align-items-center banner h-100 no-gutters">
        <div class="col-12 about ">
          <h1 class="text-white">Detalii achizitii</h1>
        </div>
    </div>
    <div class="row py-4 my-4">
       <div class="col-12 about">
           <h1 class="py-4"> Arhiva achiztii</h1>
         <li v-for="item in items">
             <a href="item">{{ item }}</a>
         </li>
         <p>{{ item }}</p>
      </div>
    </div>
    <Footer />
  </div>
</template>


<script>
import Footer from '@/components/Footer.vue'

export default {
  name: 'About',
  components:{
      Footer
  },
  data(){
      return{
          items:[],
          item:null,
      }
  },
  props: {
  },
  mounted(){
    if(this.items.length == 0){
      this.item = 'Nici un fisier disponibil.';
    }
  },
  methods:{
      getFiles(){
          fetch('./render.php')
          .then((response) => response.json())
          .then((items) => {
              console.log(items);
          })
          .catch((error) => { return console.log(error)})
      }
  }
}   
</script>

<style lang="scss" scoped>
  .about{
    max-width:1140px;
    margin:auto;
  }
  .banner{
    min-height:400px;
    max-height:400px;
    overflow:hidden;
    background-size:cover;
    background: #b92b27; 
    background: -webkit-linear-gradient(top, #4b79a1, #283e51);
    background: -moz-linear-gradient(top, #4b79a1, #283e51);
    background: -o-linear-gradient(top, #4b79a1, #283e51);
    background: linear-gradient(to top, #4b79a1, #283e51); /* Chrome 10-25, Safari 5.1-6 */ /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}   

</style>