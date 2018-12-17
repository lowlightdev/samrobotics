<template>
  <div class="container-fluid p-0 m-0">
    <div class="row align-items-center banner h-100 no-gutters">
        <div class="col-12 about ">
          <h1 class="text-white">Gama de produse acoperite</h1>
        </div>
    </div>
    <div class="row py-4 my-4">
       <div class="col-12 about">
       <div class="row">
          <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-yaskawa-list" data-toggle="list" href="#list-yaskawa" role="tab" aria-controls="yaskawa">Yaskawa</a>
              <a class="list-group-item list-group-item-action" id="list-attc-list" data-toggle="list" href="#list-attc" role="tab" aria-controls="attc">ATTC - American Torch Tip</a>
              <a class="list-group-item list-group-item-action" id="list-sincosald-list" data-toggle="list" href="#list-sincosald" role="tab" aria-controls="sincosald">Sincosald</a>
              <a class="list-group-item list-group-item-action" id="list-zakmet-list" data-toggle="list" href="#list-zakmet" role="tab" aria-controls="zakmet">Zakmet</a>
            <a class="list-group-item list-group-item-action" id="list-sprut-list" data-toggle="list" href="#list-sprut" role="tab" aria-controls="sprut">Sprutcam</a>
              <a class="list-group-item list-group-item-action" id="list-hyper-list" data-toggle="list" href="#list-hyper" role="tab" aria-controls="hyper">Hyperterm</a>

            </div>
          </div>
          <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-yaskawa" role="tabpanel" aria-labelledby="list-yaskawa-list">
                YASKAWA is a company of people pursuing their passion – driven by the vision of a smarter future with advanced technologies that save precious time and energy. And for us, any given day is a new chance to make progress.

                Our goal is to contribute to the evolution of society by improving the nature of its business, increasing the performance and productivity of our industry, and therefore our everyday lives. Naturally we promote renewable resources to ensure a healthy environment – for a sustainable planet for all of us.
                
                Based in Eschborn, Germany, YASKAWA Europe offers mechatronics and robotics solutions for companies throughout Europe, the Middle East, Africa and the CIS states. With subsidiaries in these regions and European production sites, we are within close reach of the markets’ requirements.


                </div>
              <div class="tab-pane fade" id="list-attc" role="tabpanel" aria-labelledby="list-attc-list">
              In 1940, John Walters Sr. and a group of businessmen saw a need for quality replacement torch tips, and created American Torch Tip. Innovation, research and better designs were the building blocks of our early years and we still hold true to that philosophy today.

Today we produce thousands of items including guns, torches, consumables and replacement parts for 6 platforms – Plasma, MIG, Oxy-fuel, TIG, Thermal Spray and Laser systems.


              </div>
              <div class="tab-pane fade" id="list-sincosald" role="tabpanel" aria-labelledby="list-sincosald-list">SINCOSALD Srl was founded in 1950 with the name SINCO, as a family company working in the tooling field. 
During the early years, SINCO started a small production of battery chargers giving the possibility to implant a real laboratory reaching the first real project of electrode welding power source. In 1960 was produced the first combined power source, for electrode (MMA) and wire (MIG / MAG).
In 1970, it was produced the first semi-automatic welding machine that was the first of a long series that continues until now.</div>
              <div class="tab-pane fade" id="list-zakmet" role="tabpanel" aria-labelledby="list-zakmet-list">
                ZAKMET was established in 1985. Since 1992 the company has been manufacturing advanced CNC machines for plasma cutting, oxygen cutting, laser cutting and automatic welding. Extensive experience of our engineers has enabled us to design advanced and yet simple machines. Excellent design and production facilities allow us to design, manufacture, implement and service high precision cutting and welding equipment. We operate in accordance with EN 1090-1 and EN ISO 3834-2.
              </div>
              <div class="tab-pane fade" id="list-sprut" role="tabpanel" aria-labelledby="list-sprut-list">
                SPRUT Technology has developed and implemented CAM/MES/MRP/CAPP software products since 1993. However, our journey in the software business actually began in 1986. Over the years we have developed a broad understanding which we apply to the creation of all our software products.

Throughout these years, thousands and thousands have become our happy customers. Based on their feedback, we can proudly say that we have achieved a great deal.

Today we are pleased to be able to offer you our solutions as well as our knowledge and experience that is embodied in the SPRUT family of software products.
              </div>
              <div class="tab-pane fade" id="list-hyper" role="tabpanel" aria-labelledby="list-hyper-list">
              Fifty years ago, in a small two car garage, Hypertherm began our journey with simple, powerful ideas about business and an invention that shaped the future of industrial cutting. The same ideals that fueled our inception all those years ago are still what drive us today: A passion for challenging what's achievable with the products we create, the culture we foster, and the experience we deliver to our customers. As we look to the horizon and the next 50 years, we are proud that our people, partners and innovations will shape the future with solutions that make anything possible for industries around the world.
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
    <Footer />
  </div>
</template>


<script>
import Footer from '@/components/Footer.vue'

export default {
  name: 'produse',
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