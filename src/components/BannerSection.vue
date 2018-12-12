<template>
    <div class="col-12 banner">
        <div id="particles-js"></div>
        <section class="row h-100 align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-white">
                    <h1>Solutii, Aplicatii, Management la indemana tuturor. </h1>
                    <p class="py-2">Imbunatateste-ti afacerea automatizandu-ti producerea. Produce si dsitribuie mai repde si mai sigur cu ajutorul nostru.</p>
                    <button type="button" class="btn btn-outline-light my-4">Afla mai multe</button>
            </div>
            <img src="@/assets/1.svg" class="img-fluid my-2" />
        </section>
    </div>
</template>

<script>
export default {
  name: 'BannerSection',
  props: {
  },
  mounted(){
    if(window.innerWidth>960){
        this.$el.style.height = `${window.innerHeight}px`;
    }
    particlesJS.load('particles-js', '/js/config.json', function() {
        console.log('callback - particles.js config loaded');
    });
  }
}   
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" scoped>
#particles-js{
    position:absolute;
    width:100%;
    height:100%;
    & > canvas {
        position:absolute;
    }
}
section{
    position:relative;
    margin:auto;
    max-width:1140px;
}
.banner{
    background: #b92b27; /* fallback for old browsers */
    background: -webkit-linear-gradient(top, #4b79a1, #283e51);
    background: -moz-linear-gradient(top, #4b79a1, #283e51);
    background: -o-linear-gradient(top, #4b79a1, #283e51);
    background: linear-gradient(to top, #4b79a1, #283e51); /* Chrome 10-25, Safari 5.1-6 */ /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}                    

</style>
