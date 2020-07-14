<template>
  <main class="container-fluid vh-100 d-flex animate__animated animate__zoomIn flex-column justify-content-center">
    <section class="align-self-center m-auto border border-grey">
      <div class="row no-gutters align-items-center justify-content-center text-center">
        <div class="col block logo">
        </div>
        <div class="col block background--red background--image--svg" style="transform:rotate(180deg)">
        </div>
        <div class="col block">
          <div class="background--image background--image--products m-auto text-center">
            <router-link to="services" class="text-center mr-auto ml-auto font-weight-bold">Servicii si produse</router-link>
          </div>
        </div>
      </div>
      <div class="row no-gutters align-items-center  justify-content-center text-center">
        <div class="col block background--blue background--image--svg"></div>
        <div class="col block">
          <div class="background--image background--image--about m-auto text-center">
            <router-link to="about" class="text-center mr-auto ml-auto">
              Despre noi
            </router-link>
          </div>
        </div>
        <div class="col block background--red" style="transform:rotate(180deg)"></div>
      </div>
      <div class="row no-gutters align-items-center justify-content-center text-center">
        <div class="col block">
          <div class="background--image background--image--blog  m-auto text-center">
            <router-link to="news"  class="text-center mr-auto ml-auto font-weight-bold">Noutati si Info</router-link>
          </div>
        </div>
        <div class="col block background--blue " style="transform:rotate(180deg)"></div>
        <div class="col block ">
          <div class="background--image m-auto text-center background--image--svg">
            <router-link to="contact" class="text-center mr-auto ml-auto font-weight-bold">Contact</router-link>
          </div>
        </div>
      </div>
    </section>
    <PageFooter />
  </main>
</template>

<script>
import PageFooter from "@/components/PageFooter";

export default {
  name: 'home',
  components: {
    PageFooter
  }
}

</script>

<style lang="scss" scoped>
main{
  @media screen and (max-width: 960px){
    margin-top:150px;
  }

}
.logo{
  background-image: url('~@/assets/sam_logo.jpg');
  background-size:80% ;
  background-repeat:no-repeat;
  background-position: center center;
}
.border-grey{
  border: 5px solid rgb(27, 27, 27);
}

.background--image{
  background-size:cover;
  background-position: center;
  @media screen and (min-width: 960px){
    min-height:200px;
    min-width:200px;
  }
  width:100%;
  min-height:150px;
  align-items:center;
  display:flex;
  padding:0;
  margin:0;
  position:relative;
  & > a {
    margin:auto;
    position:absolute;
    text-transform: uppercase;
    padding:1rem;
    background:rgba(0,0,0,0.6);
    color:white;
    transition:all linear 0.2s;
    &:hover{
      transition:all linear 0.2s;
      color:#0096c7;
    }
  }
  &--products{
    background-image: url('~@/assets/1.jpeg');
  }
  &--about{
    background-image: url('~@/assets/2.jpeg');
  }
  &--blog{
    background-image: url('~@/assets/3.jpeg');
  }
  &--svg{
    background-image: url('~@/assets/bg.png');
    background-size:140% 140%;
    background-position: center;
  }
}
</style>
