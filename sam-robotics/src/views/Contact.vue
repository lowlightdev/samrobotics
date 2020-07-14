<template>
  <section class="contact row align-items-center vh-100 text-left no-gutters">
    <div class="col-sm-12 col-md-5 animate__slideInLeft animate__animated background--red  text-white vh-100 d-flex align-items-center">
      <font-awesome-icon icon="arrow-left" class="align-self-start justify-self-start m-4 fa-2x position-absolute" v-on:click="goHome"/>
      <h1 class="m-auto animate__fadeIn animate__animated">{{ $route.name }}</h1>
    </div>
    <div class="col-sm-12 col-md-7 animate__slideInRight animate__animated p-4 overflow">

      <h3 class="pt-4 pb-4 mb-4 mt-4">Pentru informatii si ajutor va rugam completati formularul de mai jos</h3>

      <form @submit.prevent="postMessage">
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationServer01">Numele</label>
            <input type="text" class="form-control" id="name" v-model="name" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationServer02">Prenumele</label>
            <input type="text" class="form-control" id="surname" v-model="surname" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" v-model="email" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="company">Companie</label>
            <input type="text" class="form-control" id="company" v-model="company" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="message">Mesaj</label>
          <textarea class="form-control" id="message" placeholder="Introduceti mesajul" required v-model="message"></textarea>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input " type="checkbox" :checked="gdpr" id="invalidCheck3" required>
            <label class="form-check-label text-dark" for="invalidCheck3">
              Sunteti de acord cu <router-link to="#">termenii si condiitile GDPR</router-link>
            </label>
            <div class="text-danger">
              <small>*Trebuie sa fiti de acord pentru a trimite mesajul.</small>
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Send</button>
      </form>
      <hr>
      <div class="pt-4 pb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.70971906125!2d21.2098532159288!3d45.736915979105156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d0aebaaee37%3A0xf65c7e24b66e4115!2sStr.%20Dr.%20Pavel%20Vasici%20Ungureanu%2012a%2C%20Timi%C8%99oara%20300489%2C%20Romania!5e0!3m2!1sen!2suk!4v1594726703629!5m2!1sen!2suk" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <ul class="ml-2 pl-2">
        <li class="pb-1 pt-1">
          <font-awesome-icon icon="map-marker-alt" /> {{ address }}
        </li>
        <li class="pb-1 pt-1">
          <font-awesome-icon icon="phone"/>  {{ phone }}
        </li>
        <li class="pb-1 pt-1">
          <font-awesome-icon icon="at"/>  {{ mail }}
        </li>
        <li class="pb-1 pt-1">
          <font-awesome-icon :icon="['fab','twitter-square']"/>  <a :href="twitter">{{ twitter }}</a>
        </li>
      </ul>

    </div>
    <PageFooter />
  </section>
</template>

<script>
import PageFooter from "@/components/PageFooter";

export default {
  name:'contact',
  data(){
    return{
      address:"Doctor Pavel Vasici Ungureanu 12A, 300489, Timisoara",
      phone:" +40 722 363 086",
      mail:"office@sam-robotics.ro",
      twitter:"https://twitter.com/samrobotics",
      name:"",
      surname:"",
      company:"",
      email:"",
      message:"",
      gdpr:false
    }
  },
  components: {
    PageFooter
  },
  methods:{
    goHome(){
      this.$router.push('/')
    },
    postMessage(){
      fetch('http://127.0.0.1:8080/trello',{
        method:'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
        name: this.name,
        surname: this.surname,
        company: this.company,
        email: this.email,
        message: this.message
      })
      }).then((response)=> response.json()).then((data)=>{
        console.log(data);
      }).catch((error)=>{
        console.log(error)
      })
    }
  },
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
