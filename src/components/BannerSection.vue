<template>
  <div id="carousel" class=" carousel slide pt-4" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="@/assets/banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" id="carouselExampleCaptions2">
        <img src="@/assets/banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item"  id="carouselExampleCaptions3"> 
        <img src="@/assets/banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
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
.carousel{
  & img {
      max-height:600px;
  }
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
.carousel-caption{
  background:rgba(0,0,0,0.5);
}
</style>
