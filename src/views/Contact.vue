<template>
  <div class="contact container bg-light p-4 text-start">
    <h1>Cum si unde ne gasiti</h1>
    <p>
        Pentru a ne contacta puteti sa ne scrieti la adresa sediului, contactati telefonic, adresa de email sau pe pagina noastra de facebook.
        <br> 
        Pentru orice alte informatii aditionale va stam la dispozitie. 
    </p>
    <div class="row">
       <div class="col-lg-6 col-sm-12">
          <h4 class="pb-4"><i class="fas fa-map-marked-alt"></i> Harta</h4>
          <iframe loading="lazy" :src="maps" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="col-lg-6 col-sm-12">
          <h4 class="pb-4 ms-3 "><i class="fas fa-globe-americas"></i> Contact </h4>
          <ul class="contact-list">
              <li class="pb-4"><i class="fa-lg fas fa-map-marker-alt"></i> {{address}}</li>
              <li class="pb-4"><i class="fa-lg fas fa-phone"></i> {{contact}}</li>
              <li class="pb-4"><i class="fa-lg far fa-envelope"></i> <a :href="`mailto:${mail}`">{{mail}}</a></li>
              <li class="pb-4"><i class="fab fa-youtube  fa-lg"></i> <a :href="`mailto:${mail}`">{{mail}}</a></li>
              <li class="pb-4"><i class="fa-lg fab fa-facebook-f"></i> <a :href="facebook">{{facebook}}</a></li>
          </ul>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data(){
    return {
            address:"Doctor Pavel Vasici Ungureanu 12A, 300489, Timisoara",
            contact:"+40 722 363 086",
            mail:"office@sam-robotics.ro",
            facebook:"https://facebook.com/SamRoboticsRomania",
            maps:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.70971906125!2d21.2098532159288!3d45.736915979105156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d0aebaaee37%3A0xf65c7e24b66e4115!2sStr.%20Dr.%20Pavel%20Vasici%20Ungureanu%2012a%2C%20Timi%C8%99oara%20300489%2C%20Romania!5e0!3m2!1sen!2suk!4v1594726703629!5m2!1sen!2suk",
        }
  }
}
</script>
<style lang="scss" scoped>
h1{
    padding-top:4rem;
    padding-bottom:1rem;
    font-weight:700;
}
p{
    padding-bottom:4rem;
}
.contact-list{
  color:#222;
}
</style>