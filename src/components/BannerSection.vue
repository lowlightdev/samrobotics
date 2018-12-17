<template>
    <div class="col-12 banner">
        <section class="row h-100 align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 text-white header">
                <h1 class="py-1">Solutii, Aplicatii, Management la indemana tuturor. </h1>
                <p class="py-4">Imbunatateste-ti afacerea automatizandu-ti producerea. Produce si dsitribuie mai repde si mai sigur cu ajutorul nostru.</p>
                <router-link to="/about" class="btn btn-light my-4">Afla mai multe</router-link>
            </div>

        </section>
        
        <div class="mouse_scroll">
    
      		<div class="mouse">
      			<div class="wheel"></div>
      		</div>
      		
        </div>
        
        <Background />   
        
    </div>
    
</template>

<script>
import Background from '@/components/Background.vue'

export default {
  name: 'BannerSection',
  components:{
      Background
  },
  props: {
  },
  mounted(){
    this.$el.style.height = `${window.innerHeight}px`;
    $('.carousel').carousel({
      interval: 3000
    })
  }
}   
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped lang="scss" scoped>
.text-white{
    @media all and (max-width:960px){
        align-self: flex-start!important;
    }
}
.img-fluid{
    @media all and (max-width:1140px){
        max-height:250px;
    }
}
.header{
    z-index:9998;
}
section{
    margin:auto;
    max-width:1140px;
}

.banner{
    overflow:hidden;
    background-size:cover;
    background: #b92b27; 
    background: -webkit-linear-gradient(top, #4b79a1, #283e51);
    background: -moz-linear-gradient(top, #4b79a1, #283e51);
    background: -o-linear-gradient(top, #4b79a1, #283e51);
    background: linear-gradient(to top, #4b79a1, #283e51); /* Chrome 10-25, Safari 5.1-6 */ /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}   

.mouse_scroll {
    z-index:9999;
	display: block;
	width: 24px;
	height: 100px;
	position:absolute;
	bottom:0;
	left:0;
	margin:auto;
	right:0;
}


.m_scroll_arrows
{
  display: block;
  width: 5px;
  height: 5px;
  -ms-transform: rotate(45deg); /* IE 9 */
  -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
  transform: rotate(45deg);
   
  border-right: 2px solid white;
  border-bottom: 2px solid white;
  margin: 0 0 3px 4px;
  
  width: 16px;
  height: 16px;
}


.unu
{
  margin-top: 1px;
}

.unu, .doi, .trei
{
    -webkit-animation: mouse-scroll 1s infinite;
    -moz-animation: mouse-scroll 1s infinite;
}

.unu
{
  -webkit-animation-delay: .1s;
  -moz-animation-delay: .1s;
  -webkit-animation-direction: alternate;
}

.doi
{
  -webkit-animation-delay: .2s;
  -moz-animation-delay: .2s;
  -webkit-animation-direction: alternate;
  margin-top: -6px;
}

.trei
{
  -webkit-animation-delay: .3s;
  -moz-animation-delay: .3s;
  -webkit-animation-direction: alternate;
  margin-top: -6px;
}




.mouse
{
height: 42px;
width: 24px;
  border-radius: 14px;
  transform: none;
  border: 2px solid white;
  top: 170px;
}

.wheel
{
  height: 5px;
  width: 2px;
  display: block;
  margin: 5px auto;
  background: white;
  position: relative;
  
  height: 4px;
  width: 4px;
  border: 2px solid #fff;
  -webkit-border-radius: 8px;
          border-radius: 8px;
  

}

.wheel
{
  -webkit-animation: mouse-wheel 0.6s linear infinite;
  -moz-animation: mouse-wheel 0.6s linear infinite;
}



@-webkit-keyframes mouse-wheel
{
   0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(6px);
    -ms-transform: translateY(6px);
    transform: translateY(6px);
  }
}

@-moz-keyframes mouse-wheel
{
  0% { top: 1px; }
  25% { top: 2px; }
  50% { top: 3px;}
  75% { top: 2px;}
  100% { top: 1px;}
}

@-webkit-keyframes mouse-scroll {

  0%   { opacity: 0;}
  50%  { opacity: .5;}
  100% { opacity: 1;}
}
@-moz-keyframes mouse-scroll {

  0%   { opacity: 0; }
  50%  { opacity: .5; }
  100% { opacity: 1; }
}
@-o-keyframes mouse-scroll {

  0%   { opacity: 0; }
  50%  { opacity: .5; }
  100% { opacity: 1; }
}
@keyframes mouse-scroll {

  0%   { opacity: 0; }
  50%  { opacity: .5; }
  100% { opacity: 1; }
}

</style>
