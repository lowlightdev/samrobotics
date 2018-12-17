<template>
  <div class="container-fluid p-0 m-0 ">
    <div class="row align-items-center banner h-100 no-gutters">
        <div class="col-12 ">
          <h1 class="text-white">Contact</h1>
        </div>
    </div>
    <div class="row no-gutters contact py-4 my-4">
       <div class="col-sm-12 col-lg-6 col-xl-6">
         <h1 class="py-4 my-4">Date de contact</h1>
          <p><i class="fas fa-map-marker-alt mr-2"></i> Doctor Pavel Vasici Ungureanu 12A, 300489, Timisoara</p>
          <p><i class="fas fa-phone mr-2"></i> +40 722 363 086</p>
          <p><i class="fas fa-at mr-2"></i> <a href="mailto:office@sam-robotics.ro">office@sam-robotics.ro</a></p>
      </div>
       <div class="col-sm-12 col-lg-6 col-xl-6">
            <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.6266412465216!2d21.20918141552983!3d45.73858187910511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d74d47fe7fb%3A0x16f3ab92e1956575!2sStrada+Doctor+Pavel+Vasici+Ungureanu+12%2C+Timi%C8%99oara%2C+Romania!5e0!3m2!1sen!2suk!4v1544800341179" height="450" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
       
    <Footer />
  </div>
</template>


<script>
import Footer from '@/components/Footer.vue'

export default {
  name: 'contact',
  components:{
      Footer
  },
  props: {
  },
  mounted(){
  }
}   
</script>

<style lang="scss" scoped>
  .contact{
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