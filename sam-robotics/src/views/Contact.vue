<template>
  <section class="contact container-fluid p-0">
    <div class="row align-items-center  animate__fadeIn animate__animated">
    <header class="col-12 animate__slideInLeft animate__animated blue--bg d-flex align-self-center justify-self-center">
        <h1 class="m-auto text-center align-self-center justify-self-center">{{ $route.name }}</h1>
      </header>
    </div>
    <div class="row align-items-center container text-left m-auto no-gutters vh-50">
      <div class="col-12 animate__slideInRight animate__animated p-4">

        <h3 class="pt-4 pb-4 mb-4 mt-4">Pentru informatii si ajutor va rugam completati formularul de mai jos</h3>

        <form @submit.prevent="postMessage" class="col-12">
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
              <input type="tel" class="form-control" id="phone" v-model="phone" required :disabled="sending">
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
                  Sunteti de acord cu <a href="#" data-toggle="modal" data-target="#exampleModal">politica de confidentialitate</a>
              </label>
              <div class="text-danger">
                <small>*Trebuie sa fiti de acord pentru a trimite mesajul.</small>
              </div>
            </div>
          </div>
          <h4 v-show="success" class="text-success"> Mesajul a fost trimis cu success.</h4>
          <button class="btn btn-primary" type="submit" :disabled="sending"> {{ !sending ? "Trimite" : "In curs de trimitere..." }}</button>
        </form>
        <hr>
        <div class="col-12 pt-4 pb-4">
          <iframe loading="lazy" :src="maps" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <ul class="p-4 ">
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
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Politica de Confidențialitate</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Confidențialitatea dvs. este importantă pentru noi. Este politica SAM Robotics S.R.L de a vă respecta confidențialitatea cu privire la orice informații pe care le-am putea colecta de la dvs. pe site-ul nostru web, http://www.sam-robotics.ro și pe alte site-uri pe care le deținem și pe care le utilizăm.</p>

            <p>Solicităm informații personale doar atunci când avem nevoie cu adevărat de acestea pentru a vă oferi un serviciu. Datele le colectăm prin mijloace corecte și legale, cu cunoștințele și consimțământul dvs. De asemenea, vă anunțăm de ce îl colectăm și cum va fi utilizat.</p>
            <p>Datele dumneavoastra sunt folosite pentru a putea avea o baza de date  cu problemle sau informatiile cerute in formularul de contact de pe pagina noastra de contact. Aceasta baza de date este mentinuta pe platforma Trelo ca sa putem organiza si raspunde cat mai bine necesitatiilor dumneavoastra si sa putem oferii cele mai bune servicii pentru clientii nostri.</p>

            <p>Păstrăm informațiile colectate numai atât timp cât este necesar pentru a vă oferi serviciul solicitat. Ce date stocăm, le vom proteja în cadrul unor mijloace acceptabile din punct de vedere comercial pentru a preveni pierderea și furtul, precum și accesul, divulgarea, copierea, utilizarea sau modificarea neautorizată.</p>

            <p>Nu împărtășim niciun fel de informații de identificare personală în mod public sau cu terți, cu excepția cazurilor în care legea impune acest lucru.</p>

            <p>Website-ul nostru se poate conecta către site-uri externe care nu sunt operate de noi. Vă rugăm să rețineți că nu avem control asupra conținutului și practicilor acestor site-uri și nu putem accepta responsabilitatea sau responsabilitatea pentru politicile lor de confidențialitate.</p>

            <p>Sunteți liber să refuzați solicitarea noastră pentru informațiile dvs. personale, înțelegând că este posibil să nu vă putem furniza unele dintre serviciile dorite.</p>

            <p>Utilizarea continuă de către dvs. a site-ului nostru web si bifarea casutei de acceptare va fi considerată ca acceptare a practicilor noastre legate de confidențialitate și informații personale. Dacă aveți întrebări cu privire la modul în care gestionăm datele utilizatorului și informațiile personale, nu ezitați să ne contactați.
            </p>
            <p>Această politică este în vigoare începând cu 30 august 2020.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>




  </section>
</template>

<script>
export default {
  name:'contact',
  data(){
    return{
      address:"Doctor Pavel Vasici Ungureanu 12A, 300489, Timisoara",
      contact:" +40 722 363 086",
      mail:"office@sam-robotics.ro",
      facebook:"https://facebook.com/SamRoboticsRomania",
      maps:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.70971906125!2d21.2098532159288!3d45.736915979105156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d0aebaaee37%3A0xf65c7e24b66e4115!2sStr.%20Dr.%20Pavel%20Vasici%20Ungureanu%2012a%2C%20Timi%C8%99oara%20300489%2C%20Romania!5e0!3m2!1sen!2suk!4v1594726703629!5m2!1sen!2suk",
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
  },
  methods:{
    postMessage(){
      this.sending=true;
      fetch('http://claptrap.myddns.me:7920/trello',{
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
header{
  min-height:30vh;
}
.vh-50{
  min-height: 50vh;
}
</style>
