<template>
  <section class="contact row align-items-center vh-100 text-left no-gutters">
    <div class="col-sm-12 col-md-5 animate__slideInLeft animate__animated background--blue  text-white vh-100 d-flex align-items-center">
      <font-awesome-icon icon="arrow-left" class="align-self-start justify-self-start m-4 fa-2x position-absolute" v-on:click="goHome"/>
      <h1 class="m-auto animate__fadeIn animate__animated">{{ $route.name }}</h1>
    </div>
    <div class="col-sm-12 col-md-7 animate__slideInRight animate__animated p-4 overflow">

      <h3 class="pt-4 pb-4 mb-4 mt-4">Pentru informatii si ajutor va rugam completati formularul de mai jos</h3>

      <form @submit.prevent="postMessage">
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationServer01">Numele</label>
            <input type="text" class="form-control" id="name" v-model="name" required :disabled="sending">
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationServer02">Prenumele</label>
            <input type="text" class="form-control" id="surname" v-model="surname" required :disabled="sending">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" v-model="email" required :disabled="sending">
          </div>
          <div class="col-md-4 mb-3">
            <label for="phone">Telefon</label>
            <input type="number" class="form-control" id="phone" v-model="phone" required :disabled="sending">
          </div>
          <div class="col-md-4 mb-3">
            <label for="company">Companie</label>
            <input type="text" class="form-control" id="company" v-model="company" required :disabled="sending">
          </div>
        </div>
        <div class="mb-3">
          <label for="message">Mesaj</label>
          <textarea class="form-control" id="message" placeholder="Introduceti mesajul" required v-model="message" :disabled="sending"></textarea>
        </div>
        <div class="invalid-feedback font-weight-bold pt-2 pb-2"></div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input " type="checkbox" :checked="gdpr" id="invalidCheck3" required :disabled="sending">
            <label class="form-check-label text-dark" for="invalidCheck3">
                Sunteti de acord cu <router-link to="#">termenii si condiitile GDPR</router-link>
            </label>
            <div class="text-danger">
              <small>*Trebuie sa fiti de acord pentru a trimite mesajul.</small>
            </div>
          </div>
        </div>
        <h4 v-show="success" class="text-success"> Mesajul a fost trimis cu success.</h4>
        <button class="btn btn-primary" type="submit" :disabled="sending"> {{ !sending ? "Send" : "Sending..." }}</button>
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
          <font-awesome-icon icon="phone"/>  {{ contact }}
        </li>
        <li class="pb-1 pt-1">
          <font-awesome-icon icon="at"/>  {{ mail }}
        </li>
        <li class="pb-1 pt-1">
          <font-awesome-icon :icon="['fab','facebook-square']"/>  <a :href="facebook">{{ facebook }}</a>
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
      contact:" +40 722 363 086",
      mail:"office@sam-robotics.ro",
      facebook:"https://facebook.com/SamRoboticsRomania",
      name:"",
      surname:"",
      company:"",
      email:"",
      message:"",
      phone:"",
      gdpr:false,
      success:false,
      sending:false
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
      this.sending=true;
      fetch('http://206.189.23.196:7920/trello',{
        method:'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
        name: this.name,
        surname: this.surname,
        company: this.company,
        email: this.email,
        phone:this.phone,
        message: this.message
      })
      }).then((response)=> response.json()).then(()=>{
        this.sending=false;
        this.success = true;
        const thisObj = this;
        setTimeout(function(){
          thisObj.success = false;
        },3000);
      }).catch((error)=>{
        console.log(error);
        const errorMsg = document.querySelector('.invalid-feedback');
        errorMsg.style.display="block";
        errorMsg.innerText = "Error! Va rugam incercati din nou.";
        
        setTimeout(function(){
          errorMsg.style.display="none"
        },3000);
        this.sending=false;
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
