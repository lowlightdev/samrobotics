<template>
  <section class="news row align-items-center vh-100 text-left no-gutters">
    <div class="col-sm-12 col-md-5 animate__slideInLeft animate__animated background--blue  text-white vh-100 d-flex align-items-center">
      <font-awesome-icon icon="arrow-left" class="align-self-start justify-self-start m-4 fa-2x position-absolute" v-on:click="goHome"/>
      <h1 class="m-auto animate__fadeIn animate__animated">{{ $route.name }}</h1>
    </div>

    <div class="overflow col-sm-12 col-md-7 animate__slideInRight animate__animated p-4" v-if="posts.length >= 1">

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

    <PageFooter />
  </section>
</template>

<script>
import PageFooter from "@/components/PageFooter";

export default {
  name:'news',
  data(){
    return {
      posts:[]
    }
  },
  components: {
    PageFooter
  },
  beforeCreate(){
    const key = process.env.KEY || "AIzaSyDQ6WLgoa78hHrFydPneUp0e729Q7TNFXo";
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
.fa-arrow-left{
  cursor: pointer !important;
}
.vh-100{
  @media screen and (max-width: 960px){
    max-height:250px !important; 
  }
}
</style>
