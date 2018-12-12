<template>
  <div class="row">
    <div class="col-12 m-0">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img src="@/assets/logo.jpg" class="logo p-2"></img>SAM-ROBOTICS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Menu',
  mounted(){
    this.backgroundColor();
  },
  methods:{
    backgroundColor(){
      const self = this;
      window.addEventListener('scroll',function(){
        if(this.scrollY > 10){
          self.$el.classList.add('color');
          self.$el.classList.add('fixed-top');
        } else {
          self.$el.classList.remove('color');
          self.$el.classList.remove('fixed-top');
        }
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" scoped>
.row{
  background-color:#283e51;
  transition: all 1s linear;
}
.logo{
  max-width:64px;
}
.fixed-top{
  width:100%;
}
.color{
  transition: all 1s linear;
  background:rgba(#283e51,0.85);
}
</style>
