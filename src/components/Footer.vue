<template>
    <footer class="col-12 mt-4 py-4">
          
        <section class="row align-items-center text-white">
              
            <div class="col-12 m-auto">
                <div class="row">
                    <div class="col-sm-12 col-lg-3 col-xl-3">
                        <h4>Contact</h4>
                        <p><i class="fas fa-map-marker-alt mr-2"></i> Strada 1 , E29ED</p>
                        <p><i class="fas fa-phone mr-2"></i> 072233233232</p>
                        <p><i class="fas fa-at mr-2"></i> <a href="mailto:office@sam-robotics.ro">office@sam-robotics.ro</a></p>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-6">
                        <h4>Newsletter</h4>
                        <p>Abonati-va pentru a afla ultimele noutati</p>
                        <div class="row">
                            <div class="col-8">
                                <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="col-3">
                                <a href="#" class="btn btn-outline-light">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-xl-3">
                        <div class="row">
                            <div class="col-12">
                                <h4>Social media</h4>
                                <i class="fab fa-facebook fa-2x m-2"></i>
                                <i class="fab fa-youtube-square fa-2x m-2"></i>
                                <i class="fab fa-instagram fa-2x m-2"></i>
                            </div>
                            <div class="col-12">
                                <img src="@/assets/logo.jpg" class="logo p-2"></img>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row text-center py-4">
                    <div class="col-12">
                        Copyright <i class="far fa-copyright d-inline"></i> {{year}} Toate drepturile rezervate | Design and coding with <i class="far fa-heart" style="color:red"></i> done by VZ
                    </div>
                </div>
            </div>
                
        </section>
            
    </footer>
</template>

<script>
export default {
  name: 'Footer',
  props: {
  },
  data(){
      return {
          year: new Date().getFullYear()
      }
  },
  mounted(){
  }
}   
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" scoped>
    .logo{
        max-width:150px;
    }
    footer{
        background-color:#283e51;
    }
    section{
        margin:auto;
        max-width:1140px;
    }
</style>
