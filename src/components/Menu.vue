<template>
  <div class="row no-gutters">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand font-weight-bold" ><span style="color:#0094de">S</span><span style="color:#d1251f">AM</span>-ROBOTICS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <router-link to="/" class="nav-link" >Home <span class="sr-only">(current)</span></router-link>
            </li>
            <li class="nav-item active">
              <router-link to="/despre" class="nav-link" >Despre noi</router-link>
            </li>
            <li class="nav-item active">
              <router-link to="/produse" class="nav-link" >Gama de produse</router-link>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Arhiva date si informatii
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <router-link class="dropdown-item" to="/achiztii">Achiztii</router-link>              
              </div>
            </li>
            <li class="nav-item active">
              <router-link to="/contact" class="nav-link">Contact</router-link>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Menu',
  mounted(){
    const self = this;
    this.backgroundColor();
    if( window.innerWidth>960){
      self.$el.classList.add('absolute');
    }
  },
  methods:{
    backgroundColor(){
      const self = this;
      window.addEventListener('scroll',function(){
        if(this.scrollY > 10 && window.innerWidth>960){
          self.$el.classList.add('color');
          self.$el.classList.add('fixed-top');
          self.$el.classList.remove('absolute');
        } else {
          self.$el.classList.remove('fixed-top');
          self.$el.classList.remove('color');
          if(window.innerWidth>960){
            self.$el.classList.add('absolute');
          }        
        }
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" scoped>
.absolute{
  position:absolute;
  z-index:9999;
}
.row{
  @media screen and (min-width:960px){
    width:100%;
    top:0;
    background-color:transparent;
  }
  z-index:9999;
  @media screen and (max-width:960px){
    background:#283e51;
  }
  transition: all 0.3s linear;
}
.logo{
  max-width:64px;
}
nav{
  max-width:1140px;
  margin:auto;
}
.color{
  background:#283e51;
  transition: all 0.3s linear;
}
</style>
