<template>
    <footer class="col-12 mt-4 py-4">
          
        <section class="row align-items-center text-white">
              
            <div class="col-12 m-auto">
                <div class="row">
                    <div class="col-sm-12 col-lg-3 col-xl-3">
                        <h4>Contact</h4>
                        <p><i class="fas fa-map-marker-alt mr-2"></i> Doctor Pavel Vasici Ungureanu 12A, 300489, Timisoara</p>
                        <p><i class="fas fa-phone mr-2"></i> +40 722 363 086</p>
                        <p><i class="fas fa-at mr-2"></i> <a href="mailto:office@sam-robotics.ro">office@sam-robotics.ro</a></p>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-6">
                        <h4>Newsletter</h4>
                        <p>Abonati-va pentru a afla ultimele noutati</p>
                        <div class="row">
                            <!--<div class="col-8">-->
                            <!--    <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="name@example.com">-->
                            <!--</div>-->
                            <!--<div class="col-3">-->
                            <!--    <a href="#" class="btn btn-outline-light">Subscribe</a>-->
                            <!--</div>-->
                            <div class="col-12">
                                
                                <!-- Begin Mailchimp Signup Form -->

<div id="mc_embed_signup">
<form action="https://sam-robotics.us7.list-manage.com/subscribe/post?u=cc011c9c3054f133e42668504&amp;id=9ff10aff30" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div class="row" id="mc_embed_signup_scroll">
        <div class="mc-field-group col-8">
        	<input type="email" value="" name="EMAIL" class="required email form-control " id="mce-EMAIL" placeholder="Email Address">
        </div>
        <div class="col-4"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-outline-light"></div>
        <div id="mce-responses col-12" class="clear">
        	<div class="response" id="mce-error-response" style="display:none"></div>
        	<div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cc011c9c3054f133e42668504_9ff10aff30" tabindex="-1" value=""></div>
    </div>
</form>

</div>
<!--End mc_embed_signup-->
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-xl-3">
                        <div class="row">
                            <div class="col-12">
                                <h4>Social media</h4>
                                <i class="fab fa-facebook fa-2x m-2"></i>
                                <i class="fab fa-youtube-square fa-2x m-2"></i>
                                <i class="fab fa-instagram fa-2x m-2"></i>
                            </div>
                            <div class="col-12">
                                <img src="@/assets/logo.jpg" class="logo p-2"></img>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row text-center py-4">
                    <div class="col-12">
                        Copyright <i class="far fa-copyright d-inline"></i> {{year}} Toate drepturile rezervate 
                    </div>
                </div>
            </div>
                
        </section>
            
    </footer>
</template>

<script>
export default {
  name: 'Footer',
  props: {
  },
  data(){
      return {
          year: new Date().getFullYear()
      }
  },
  mounted(){
  }
}   
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss" scoped>
    .logo{
        max-width:150px;
    }
    footer{
        background-color:#283e51;
    }
    section{
        margin:auto;
        max-width:1140px;
    }
</style>
