<template>
    <div class="col-12 mb-4 pb-4" >
          
        <section class="row align-items-center ">
            <div class="col-12 text-center my-4 py-4">
                <h1>
                    Ultimele noutati
                </h1>
                <p>
                    Stiri, noutati, informatii din domeniu
                </p>
            </div>  
            <div class="col-sm-12 col-lg-6 col-xl-6 m-auto text-center ">
                <div class="card m-auto col-12">
                  <img class="card-img-top" src="https://images.pexels.com/photos/585419/pexels-photo-585419.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-12 col-lg-6 col-xl-6 m-auto text-center">
                <div class="card m-auto col-12">
                  <img class="card-img-top" src="https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                  </div>
                </div>
            </div>
                
        </section>
            
    </div>
</template>

<script>
export default {
  name: 'Blog',
  props: {
  },
  mounted(){
  }
}   
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" scoped>
    section{
        margin:auto;
        max-width:1140px;
    }
</style>
