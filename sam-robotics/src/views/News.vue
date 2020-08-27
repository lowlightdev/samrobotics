<template>
  <section class="news container-fluid p-0">
    <div class="row align-items-center  animate__fadeIn animate__animated">
     <header class="col-12 animate__slideInLeft animate__animated blue--bg d-flex align-self-center justify-self-center">
        <h1 class="m-auto text-center align-self-center justify-self-center">{{ $route.name }}</h1>
      </header>
    </div>
    <div class="row align-items-center container text-left m-auto no-gutters vh-50">
      <div class="col-12 animate__slideInRight animate__animated p-4" v-if="posts.length >=1">
        <article v-for="post in posts" class="row p-2" :key="post.id">
          <div class="col-md-9 col-sm-12">
            <h2>{{ post.title }} </h2>
          </div>
          <div class="col-12">
            <small class="text-muted">
              <font-awesome-icon icon="clock"  /> 
              Posted on {{ post.date }}
            </small>
          </div>
          <div class="col-12 pt-2 pb-2" v-html="post.content"></div>
          <div class="col-12">
            <hr>
          </div>
        </article>  

      </div>

      <div class="overflow col-sm-12 col-md-7 animate__slideInRight animate__animated p-4" v-else>
          <h2 class="pb-4"> Nici un post publicat.</h2>
          <hr>
      </div>
    </div>
  </section>
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
    console.log(this.$store)
    const key = this.$store.state.blogger;
    fetch(`https://www.googleapis.com/blogger/v3/blogs/3135149309622251946/posts?key=${key}`).then(response => response.json()).then(data => {
      data.items.forEach((item)=>{
        console.log(item)
        const id = item.id;
        const title  = item.title;
        const itemDate = item.updated.split("T");
        const date = `${itemDate[0]} ${itemDate[1].split('-')[0]}`;
        const content = item.content;
        this.posts.push({id:id,title:title,date:date,content:content});
      })
      
    }).catch((error)=>{
      console.log(error)
    })
  },
  methods:{
    goHome(){
      this.$router.push('/')
    }
  }
}
</script>

<style lang="scss" scoped>
header{
  min-height:30vh;
}

</style>
