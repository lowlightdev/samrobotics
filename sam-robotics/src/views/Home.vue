<template>
  <main class="container-fluid vh-100 d-flex animate__animated animate__zoomIn flex-column justify-content-center">
    <section class="align-self-center m-auto border border-grey">
      <div class="row no-gutters align-items-center justify-content-center text-center">
        <div class="col block logo">
        </div>
        <div class="col block background--red"></div>
        <div class="col block ">
          <router-link to="about"  class="text-center mr-auto ml-auto font-weight-bold">Gama de produse</router-link>
        </div>
      </div>
      <div class="row no-gutters align-items-center  justify-content-center text-center">
        <div class="col block background--blue"></div>
        <div class="col block">
          <router-link to="about" class="text-center mr-auto ml-auto">
            Despre noi
          </router-link>
        </div>
        <div class="col block background--red"></div>
      </div>
      <div class="row no-gutters align-items-center justify-content-center text-center">
        <div class="col block">
          <router-link to="about"  class="text-center mr-auto ml-auto font-weight-bold">Blog</router-link>
        </div>
        <div class="col block background--blue"></div>
        <div class="col block ">
          <router-link to="about"  class="text-center mr-auto ml-auto font-weight-bold">Contact</router-link>
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
    margin-top:100px;
  }
}
.logo{
  background-image: url('~@/assets/sam_logo.jpg');
  background-size:contain;
  background-repeat:no-repeat;
  background-position: center center;
}
.border-grey{
   border: 5px solid rgb(112, 112, 112);
}
</style>
