<template>
  <section class="products row align-items-center vh-100 text-center no-gutters">
    <div class="col-sm-12 col-md-6 animate__slideInLeft animate__animated background--red  text-white vh-100 d-flex align-items-center">
      <font-awesome-icon icon="arrow-left" class="align-self-start justify-self-start m-4 fa-2x position-absolute" v-on:click="goHome"/>
      <h1 class="display-3 pt-4 m-auto animate__fadeIn animate__animated">{{ $route.name }}</h1>
    </div>
    <div class="col-sm-12 col-md-6 animate__slideInRight animate__animated p-4 overflow">
      <h1 class="h1 animate__fadeIn animate__animated pb-4"> Servicii si produse oferite</h1>
        <div class="card-deck">
            <div class="card pt-4">
                <font-awesome-icon icon="tools" class="text-center m-auto fa-2x mt-4" />
                <div class="card-body">
                <h5 class="card-title">Mentenanta,reparatii si instalare</h5>
                <p class="card-text">Echipa noastra ofera mentenanta, reparatii, ajustari robotiilor la cea mai inalta calitate si cele mai inalte standarde oferite de o echipa pregatita pentru orice situatie.</p>
                </div>
            </div>
            <div class="card pt-4">
                <font-awesome-icon icon="hands-helping" class="text-center m-auto fa-2x mt-4" />
                <div class="card-body">
                <h5 class="card-title">Consultanta</h5>
                <p class="card-text">Oferim consultanta pentru robotii industriali din gama de produse acoperit cat si in alte domenii precum cnc-uri, sudura, consumabile din domeniu etc.</p>
                </div>
            </div>
            <div class="card pt-4">
                <font-awesome-icon icon="comments-dollar" class="text-center m-auto fa-2x mt-4" />
                <div class="card-body">
                <h5 class="card-title">Achizitonare echipamente</h5>
                <p class="card-text">Oferim echipamente clientiilor nostrii oferite de partenerii nostri si consultata in punerea lor in functiune.</p>
                </div>
            </div>
        </div>

        <h2 class="h1 p-4">Produse</h2> 
        <p class="text-left">Partenerii nostrii ofera o gama larga de produse din domeniul diferite domenii de activitate lefate re robotica, sdurua, echipamente industriale, etc. 
        <br> Pentru a vedea ofertele va rugam sa ne contactati folosding pagina de <router-link to="contact">contact</router-link></p>

        <h2 class="h1 p-4">Parteneri</h2>

       
        <div  class="row"><div  class="col-4"><div  id="list-tab" role="tablist" class="list-group"><a  id="list-yaskawa-list" data-toggle="list" href="#list-yaskawa" role="tab" aria-controls="yaskawa" class="list-group-item list-group-item-action" aria-selected="false">Yaskawa</a><a  id="list-attc-list" data-toggle="list" href="#list-attc" role="tab" aria-controls="attc" class="list-group-item list-group-item-action active show" aria-selected="true">ATTC - American Torch Tip</a><a  id="list-sincosald-list" data-toggle="list" href="#list-sincosald" role="tab" aria-controls="sincosald" class="list-group-item list-group-item-action">Sincosald</a><a  id="list-zakmet-list" data-toggle="list" href="#list-zakmet" role="tab" aria-controls="zakmet" class="list-group-item list-group-item-action">Zakmet</a><a  id="list-sprut-list" data-toggle="list" href="#list-sprut" role="tab" aria-controls="sprut" class="list-group-item list-group-item-action">Sprutcam</a><a  id="list-hyper-list" data-toggle="list" href="#list-hyper" role="tab" aria-controls="hyper" class="list-group-item list-group-item-action">Hyperterm</a></div></div><div  class="col-8"><div  id="nav-tabContent" class="tab-content"><div  id="list-yaskawa" role="tabpanel" aria-labelledby="list-yaskawa-list" class="tab-pane fade">
                YASKAWA is a company of people pursuing their passion – driven by the vision of a smarter future with advanced technologies that save precious time and energy. And for us, any given day is a new chance to make progress.

                Our goal is to contribute to the evolution of society by improving the nature of its business, increasing the performance and productivity of our industry, and therefore our everyday lives. Naturally we promote renewable resources to ensure a healthy environment – for a sustainable planet for all of us.
                
                Based in Eschborn, Germany, YASKAWA Europe offers mechatronics and robotics solutions for companies throughout Europe, the Middle East, Africa and the CIS states. With subsidiaries in these regions and European production sites, we are within close reach of the markets’ requirements.


                </div><div  id="list-attc" role="tabpanel" aria-labelledby="list-attc-list" class="tab-pane fade active show">
              In 1940, John Walters Sr. and a group of businessmen saw a need for quality replacement torch tips, and created American Torch Tip. Innovation, research and better designs were the building blocks of our early years and we still hold true to that philosophy today.

Today we produce thousands of items including guns, torches, consumables and replacement parts for 6 platforms – Plasma, MIG, Oxy-fuel, TIG, Thermal Spray and Laser systems.


              </div><div  id="list-sincosald" role="tabpanel" aria-labelledby="list-sincosald-list" class="tab-pane fade">SINCOSALD Srl was founded in 1950 with the name SINCO, as a family company working in the tooling field. 
During the early years, SINCO started a small production of battery chargers giving the possibility to implant a real laboratory reaching the first real project of electrode welding power source. In 1960 was produced the first combined power source, for electrode (MMA) and wire (MIG / MAG).
In 1970, it was produced the first semi-automatic welding machine that was the first of a long series that continues until now.</div><div  id="list-zakmet" role="tabpanel" aria-labelledby="list-zakmet-list" class="tab-pane fade">
                ZAKMET was established in 1985. Since 1992 the company has been manufacturing advanced CNC machines for plasma cutting, oxygen cutting, laser cutting and automatic welding. Extensive experience of our engineers has enabled us to design advanced and yet simple machines. Excellent design and production facilities allow us to design, manufacture, implement and service high precision cutting and welding equipment. We operate in accordance with EN 1090-1 and EN ISO 3834-2.
              </div><div  id="list-sprut" role="tabpanel" aria-labelledby="list-sprut-list" class="tab-pane fade">
                SPRUT Technology has developed and implemented CAM/MES/MRP/CAPP software products since 1993. However, our journey in the software business actually began in 1986. Over the years we have developed a broad understanding which we apply to the creation of all our software products.

Throughout these years, thousands and thousands have become our happy customers. Based on their feedback, we can proudly say that we have achieved a great deal.

Today we are pleased to be able to offer you our solutions as well as our knowledge and experience that is embodied in the SPRUT family of software products.
              </div><div  id="list-hyper" role="tabpanel" aria-labelledby="list-hyper-list" class="tab-pane fade">
              Fifty years ago, in a small two car garage, Hypertherm began our journey with simple, powerful ideas about business and an invention that shaped the future of industrial cutting. The same ideals that fueled our inception all those years ago are still what drive us today: A passion for challenging what's achievable with the products we create, the culture we foster, and the experience we deliver to our customers. As we look to the horizon and the next 50 years, we are proud that our people, partners and innovations will shape the future with solutions that make anything possible for industries around the world.
              </div></div></div></div>
    </div>
    <PageFooter />
  </section>
</template>

<script>
import PageFooter from "@/components/PageFooter";

export default {
  name:'products',
  components: {
    PageFooter
  },
  methods:{
    goHome(){
      this.$router.push('/')
    }
  },
}
</script>

<style lang="scss" scoped>
.fa-arrow-left{
  cursor: pointer !important;
  z-index:9999;
}
.vh-100{
  @media screen and (max-width: 960px){
    max-height:250px !important; 
  }
}
.overflow{
    @media screen and (min-width: 960px){
        overflow:auto;
        max-height:100%;
    }
}
.list-group-item.active{
    background-color: #0096c7 !important;
}
</style>
