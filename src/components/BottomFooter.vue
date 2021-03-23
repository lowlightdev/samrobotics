<template>
    <div class="container footer py-4">
       <div class="footer-info">
           <h2 class="border-end-0 border-bottom-0 border-top-0 border  border-danger border-4 ps-4"> Contact</h2>
           <ul class="list-group">
                <li class="list-group-item"><i class="fa-lg fas fa-map-marker-alt"></i> {{address}}</li>
                <li class="list-group-item"><i class="fa-lg fas fa-phone"></i> {{contact}}</li>
                <li class="list-group-item"><i class="fa-lg far fa-envelope"></i> <a :href="`mailto:${mail}`">{{mail}}</a></li>
                <li class="list-group-item"><i class="fa-lg fab fa-facebook-f"></i> <a :href="facebook">{{facebook}}</a></li>
            </ul>
       </div> 
        <div class="footer-map ">
            <h2 class="text-start border-end-0 border-bottom-0 border-top-0 border  border-danger border-4 ps-4"> Map</h2>
            <iframe loading="lazy" :src="maps" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <div class="container-fluid text-center bg-secondary py-3 mt-4 text-white">
        <small>{{ new Date().getFullYear()}}  <i class="far fa-copyright"></i>  S.C SAM Robotics S.R.L</small>
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
.footer{
    display:grid;
    grid-template-columns: 1fr;
    @media screen and (min-width:720px) {
        grid-template-columns: 1fr  1fr;
    }
    gap:4rem;
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

}
.bg-secondary{
    background:rgba(0,0,0,0.5);
}
i {
    padding-right:1rem;
}
</style>
