<template>
  <div class="container-fluid banner">
    <div class=" container banner-text">
      <h1>SAM ROBOTICS</h1>
      <h2>Solutia de inceredere in materie <br> de roboti industriali</h2>
      <p>Activi pe piata din Romania din 2008. Acreditati si parteneri oficiali Yaskawa.</p>
      <router-link to="/about" class="btn btn-danger px-4">Afla mai multe</router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: 'BannerSection'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.banner{
  background:url('~@/assets/banner.jpg');
  background-size: cover;
  min-height:600px;
  vertical-align: middle;
  display:flex;
  align-items: center;
}
.banner-text{
  color:white;
  text-align: left;
  padding:.75rem;
  font-weight: bold;
  text-shadow: 1px 1px 1px #222;
  & > h1{
    font-weight: 900;
    padding-top:5rem;
  }
  & h2{
    padding-top:2rem;
    font-weight: 900;
  }
  & > p {
    font-size:110%;
    padding-top:1rem;
    padding-bottom:2rem;
  }
  & button{
    margin-bottom:5rem;
    border-radius:25px;
  }
}

</style>
