<template>
    <div class="container footer p-4 my-4">
       <div class="footer-info">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h4 class="pb-4">Ultimile Stiri</h4>
                    <ul  style="margin-left:15px;padding:0;">
                        <li class="pb-2">
                            <p class="pb-1 mb-1">This is a longer card with supporting text below as a natural lead-in to additional conten.</p>
                            <small class="text-white-50"> April 17, 2021</small>
                        </li>
                        <li class="pb-2">
                            <p class="pb-1 mb-1">This is a longer card with supporting text below as a natural lead-in to additional conten.</p>
                            <small class="text-white-50"> April 17, 2021</small>
                        </li>
                        <li class="pb-2">
                            <p class="pb-1 mb-1">This is a longer card with supporting text below as a natural lead-in to additional conten.</p>
                            <small class="text-white-50"> April 17, 2021</small>
                        </li>
                    </ul>
                </div>
             
                <div class="col-lg-4 col-sm-12">
                    <h4 class="pb-4"> Harta</h4>
                    <iframe loading="lazy" :src="maps" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <h4 class="pb-4"> Contact </h4>
                    <ul style="list-style-type:none;margin:0;padding:0;"> 
                        <li class="pb-4"><i class="fa-lg fas fa-map-marker-alt"></i> {{address}}</li>
                        <li class="pb-4"><i class="fa-lg fas fa-phone"></i> {{contact}}</li>
                        <li class="pb-4"><i class="fa-lg far fa-envelope"></i> <a :href="`mailto:${mail}`">{{mail}}</a></li>
                        <li class="pb-4"><i class="fab fa-youtube  fa-lg"></i> <a :href="`mailto:${mail}`">{{mail}}</a></li>
                        <li class="pb-4"><i class="fa-lg fab fa-facebook-f"></i> <a :href="facebook">{{facebook}}</a></li>
                    </ul>
                </div>
            </div>
           
           <div class="col-12">
            <hr>
            <div class="row">
                <div class="col-6">
                    <small> S.C SAM Robotics S.R.L</small>
                </div>
                <div class="col-6 text-end">
                        <small> <i class="far fa-copyright"></i> {{ new Date().getFullYear()}}  </small>
                </div>
            </div>
           </div>
          
       </div> 
 
    </div>

</template>

<script>
export default {
  name: 'BottomFooter',
    data(){
        return {
            address:"Doctor Pavel Vasici Ungureanu 12A, 300489, Timisoara",
            contact:"+40 722 363 086",
            mail:"office@sam-robotics.ro",
            facebook:"https://facebook.com/SamRoboticsRomania",
            maps:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.70971906125!2d21.2098532159288!3d45.736915979105156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d0aebaaee37%3A0xf65c7e24b66e4115!2sStr.%20Dr.%20Pavel%20Vasici%20Ungureanu%2012a%2C%20Timi%C8%99oara%20300489%2C%20Romania!5e0!3m2!1sen!2suk!4v1594726703629!5m2!1sen!2suk",
        }
    }
}
</script>

<style lang="scss" scoped>
.container-fluid{
    background:#55595d;
}
.footer{
    color:white;
    background:#55595d;
    &-info{
        text-align: left;
    }
    &-map{
        border-radius:25px;
        & iframe{
            margin-top:1rem;
        }
    }
}
.list-group{
    text-align: left;
    margin-top:1rem;
    text-decoration: none;
    list-style-type: none;
    padding:0;
    margin:0;
    
}

ul {
    & li {
         & a {
            text-decoration: none;
            color:white  !important;
         }
        
    }
}
</style>
