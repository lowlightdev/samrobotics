<template>
  <main class="container-fluid">
    <header class="header">
      <div class="row container m-auto align-items-center h-100 no-gutters">
        <div class="col-12 text-light">
           <h1 class="header-text-shadow p-4"> Prima alegere in consultanta, mentenanta, reparatii a robotilor industriali si a echipamentelor de automatizare industriale </h1>
        </div>
      </div>
    </header>
    <section class="container p-4">
      <div class="row">
        <div class="col-12">
            <div class="card-deck mt-4 text-center">
                <div class="card p-2">
                    <font-awesome-icon icon="tools" class="text-center m-auto fa-2x mt-4" />
                    <div class="card-body">
                    <h5 class="card-title">Mentenanta,reparatii si instalare</h5>
                    <p class="card-text">Echipa noastra ofera mentenanta, reparatii, ajustari robotiilor la cea mai inalta calitate si cele mai inalte standarde oferite de o echipa pregatita pentru orice situatie.</p>
                    </div>
                </div>
                <div class="card p-2">
                    <font-awesome-icon icon="hands-helping" class="text-center m-auto fa-2x mt-4" />
                    <div class="card-body">
                    <h5 class="card-title">Consultanta</h5>
                    <p class="card-text">Oferim consultanta pentru robotii industriali din gama de produse acoperit cat si in alte domenii precum cnc-uri, sudura, consumabile din domeniu etc.</p>
                    </div>
                </div>
                <div class="card p-2">
                    <font-awesome-icon icon="comments-dollar" class="text-center m-auto fa-2x mt-4" />
                    <div class="card-body">
                    <h5 class="card-title">Achizitonare echipamente</h5>
                    <p class="card-text">Oferim echipamente clientiilor nostrii din gama curenta a partenerilor nostri si consultata in punerea lor in functiune.</p>
                    </div>
                </div>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h3 class="text-center blue pt-4">Noutati & Evenimente</h3>
          <h1 class="text-center pb-4">Informatii si actualitati SAM Robotics</h1>
          <div class="card mb-3">
            <div class="card-header">
                {{posts[0].title}}
            </div>
            <div class="card-body">
              <p class="card-text" v-html="posts[0].content">
              </p>
            </div>
            <div class="card-footer text-left text-muted">
              <p class="card-text"><small class="text-muted">Posted {{ posts[0].date }}</small></p>
            </div>
          </div>
          <a href="#" class="w-100 mt-2 mb-4 btn btn-primary">Toate stirile</a>
        </div>
      </div>
    </section>
  </main>
</template>

<script>
export default {
  name:'news',
  data(){
    return {
      posts:[]
    }
  },
  components: {
  },
  beforeCreate(){
    const key = this.$store.state.blogger;
    fetch(`https://www.googleapis.com/blogger/v3/blogs/3135149309622251946/posts?key=${key}`).then(response => response.json()).then(data => {
      data.items.forEach((item,i)=>{
        if(i<1){
        const id = item.id;
        const title  = item.title;
        const itemDate = item.updated.split("T");
        const date = `${itemDate[0]} ${itemDate[1].split('-')[0]}`;
        const content = item.content;
        this.posts.push({id:id,title:title,date:date,content:content});
        }
      })
      
    }).catch((error)=>{
      console.log(error)
    })
  },
  methods:{
  }
}

</script>

<style lang="scss" scoped>
.container-fluid{  
  padding: 0;
  margin: 0;
}
.header{
  width: 100%;
  height:80vh;
  position: relative;
  overflow: hidden;
  &:after{
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    width: 130%;
    height: 95%;
    background: linear-gradient(to top, rgba(21, 51, 65, 0.8), rgba(6, 20, 27, 0.8)), url("~@/assets/hbg.jpg") center no-repeat;
    // background-size: 100% 100%;
    background-size: cover;
    z-index: -1;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) rotate(0deg);
    @media screen and (max-width:960px) {
      width: 200%;
    }
  }
  &-text-shadow{
    text-shadow: 1px 1px 10px #000;
  }
}
.card-body{
  max-height: 250px;
  overflow: auto;
}

</style>
