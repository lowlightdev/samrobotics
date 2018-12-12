<template>
    <div class="col-12 my-4 py-4">
      
        <section class="row">
          <div class="col-sm-12 col-lg-4 col-xl-4">
              <div class="card my-4">
                <img class="card-img-top" src="@/assets/repair.svg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Mentenanta si reparatii</h5>
                  <p class="card-text">Echipa noastra ofera mentenanta, reparatii, ajustari robotiilor la cea mai inalta calitate si cele mai inalte standarde oferite de o echipa pregatita pentru orice situatie.</p>
                  <a href="#" class="btn btn-outline-primary">Mai multe</a>
                </div>
              </div>
            </div>
            
            <div class="col-sm-12 col-lg-4 col-xl-4">
              <div class="card my-4">
                <img class="card-img-top" src="@/assets/consulting.svg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Consultanta</h5>
                  <p class="card-text">Oferim consultanta pentru robotii industriali aflati in gama noastra de produse si in alte domenii precum cnc-uri, consumabile din domeniu etc.</p>
                  <a href="#" class="btn btn-outline-primary">Mai multe</a>
                </div>
              </div>
            </div>
            
            <div class="col-sm-12 col-lg-4 col-xl-4">
              <div class="card my-4" >
                <img class="card-img-top" src="@/assets/winner.svg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Calitate, siguranta, incredere</h5>
                  <p class="card-text">Cu o experienta de peste 8 ani in domeniu, calitatea serviciilor noastre este prioritatea noastra iar doavada o fac clientii multumiti si renumele acitivatatii noastre in domeniu.</p>
                  <a href="#" class="btn btn-outline-primary">Mai multe</a>
                </div>
              </div>
            </div>
            
        </section>
        
    </div>
</template>

<script>
export default {
  name: 'FeatureSection',
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
    
    .card{
      &-img-top{
        max-height:150px;
        padding:5px;
      }
      &-body{
        min-height:230px;
      }
    }
</style>
