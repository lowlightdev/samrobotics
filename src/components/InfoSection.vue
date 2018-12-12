<template>
    <div class="container-fluid p-0 m-0">
        <div class="col-12 my-4 py-4 left" :class="{ 'color': $props.position =='left' }" v-if="$props.position == 'left'">
          
            <section class="row align-items-center ">
              
                <div class="col-sm-12 col-lg-6 col-xl-6">
                  <img src="@/assets/left.png" class="img-fluid"/>
                </div>
                
                <div class="col-sm-12 col-lg-6 col-xl-6">
                    <h1>Partener oficial <a href="https://www.yaskawa.eu.co">YASKAWA</a></h1>
                    <p>
                        <a href="http://sam-robotics.ro">SAM Robotics</a> Romania este o companie acreditata <a href="https://www.yaskawa.eu.co">YASKAWA</a> si parteneri oficiali ai acesteia in Romania. Intreaga noastra echipa fiind scolita si antrenata de una dintre cele mai bune companii din lume in domeniu ne ofera siguranta si increderea de care avem nevoie pentru a va oferii serviciile pe care vi le doriti de la o firma de renume.
                    </p>
                    
                    <div class="text-right"><a href="#" class="btn btn-outline-primary">Viziteaza YASKAWA Motoman</a></div>
                </div>
                
            </section>
            
        </div>
        <div class="col-12 my-4 py-4"  v-if="$props.position == 'right'">
             <section  class="row align-items-center">
                            
                <div class="col-sm-12 col-lg-6 col-xl-6">
                    <h1>Subtitlu <a href="https://www.yaskawa.eu.co">Ceva</a></h1>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique augue ac varius dignissim. Phasellus vitae facilisis orci, mattis dapibus odio. Phasellus at lectus non elit volutpat feugiat et ac velit. Vestibulum nec urna placerat, laoreet ante nec, tristique nunc. Cras rutrum eros in lorem viverra condimentum. Duis ac imperdiet justo, nec hendrerit velit. In hac habitasse platea dictumst. Nunc metus mauris, consequat non metus eu, luctus accumsan tellus. Sed lacinia felis at ligula egestas mollis. Etiam neque nulla, commodo nec est ut, euismod dictum dolor. Aliquam sollicitudin sodales magna sed tincidunt. Ut blandit et ex ut fringilla.


                    </p>
                </div>
                
                <div class="col-sm-12 col-lg-6 col-xl-6">
                    <iframe height="315" class="shadow-sm p-3 mb-5 bg-white rounded w-100" src="https://www.youtube.com/embed/kM2CBrVuYDE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
export default {
  name: 'InfoSection',
  props: {
      position:String
  },
  mounted(){
  }
}   
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" scoped>
    .color{
        background-color:rgba(#ccc,0.2);    
    }
    .img-fluid{
        max-height:250px;
    }
    section{
        margin:auto;
        max-width:1140px;
    }
    .left{
        background-image:url('/img/1.png');
        background-repeat:no-repeat;
        background-size:contain;
        background-position:left top;
    }
</style>
