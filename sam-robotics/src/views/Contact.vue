<template>
  <section class="contact row align-items-center vh-100 text-left no-gutters">
    <div class="col-sm-12 col-md-5 animate__slideInLeft animate__animated background--red  text-white vh-100 d-flex align-items-center">
      <font-awesome-icon icon="arrow-left" class="align-self-start justify-self-start m-4 fa-2x position-absolute" v-on:click="goHome"/>
      <h1 class="m-auto animate__fadeIn animate__animated">{{ $route.name }}</h1>
    </div>
    <div class="col-sm-12 col-md-7 animate__slideInRight animate__animated p-4">
      
      <h2 class="animate__fadeIn animate__animated pb-4 mb-4"> Contact SAM Robotics</h2>
      <ul>
        <li>
          <font-awesome-icon icon="map-marker-alt" /> {{ address }}
        </li>
        <li>
          <font-awesome-icon icon="phone"/>  {{ phone }}
        </li>
        <li>
          <font-awesome-icon icon="at"/>  {{ email }}
        </li>
      </ul>

      <h3 class="pt-4 pb-4 mb-4 mt-4">Pentru informatii si ajutor va rugam completati formularul de mai jos</h3>

      <form>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationServer01">First name</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationServer02">Last name</label>
            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationServer03">Company</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" required>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationServer03">Address</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" required>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="validationTextarea">Textarea</label>
          <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
          <div class="invalid-feedback">
            Please enter a message in the textarea.
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
            <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
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
      email:"office@sam-robotics.ro"
    }
  },
  components: {
    PageFooter
  },
  methods:{
    goHome(){
      this.$router.push('/')
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
