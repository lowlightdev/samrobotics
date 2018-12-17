<template>
    <div class="col-12 my-4 py-4" >
          
        <section class="row align-items-center ">
              
            <div class="col-12 m-auto text-center">
                <img src="@/assets/partners/yaskawa.png" class="img-fluid p-2"></img>
                <img src="@/assets/partners/attc.svg" class="img-fluid p-2"></img>
                <img src="@/assets/partners/sas.jpg" class="img-fluid p-2"></img>
                <img src="@/assets/partners/leoni.svg" class="img-fluid p-2"></img>
                <img src="@/assets/partners/sprutcam.png" class="img-fluid p-2"></img>
                <img src="@/assets/partners/zakmet.svg" class="img-fluid p-2"></img>
            </div>
                
        </section>
            
    </div>
</template>

<script>
export default {
  name: 'Partners',
  props: {
  },
  mounted(){
  }
}   
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" scoped>
.py-4{
    background:rgba(204, 204, 204, 0.1);
}
img{
    max-width:150px;
    margin:auto;
}
    section{
        margin:auto;
        max-width:1140px;
    }
</style>
