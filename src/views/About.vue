<template>
    <div class="container bg-white">
        <div class="row py-4">
            <div class="col-12 text-start">
                <h1> Despre noi </h1>
                <hr>
                <p class="pt-4"> Societatea <b>SAM Robotics</b> este reprezentantul oficial din 2008, in Romania pentru: <a href="https://www.yaskawa.eu.com/"><b>Yaskawa Robotics Division (MOTOMAN)</b></a> care este unul din liderii mondiali in conceperea, productia, implementarea si comercializarea de celule robotizate si roboti industriali cu diverse domenii de aplicabilitate in industrie, cercetare si invatamint.<br> Supunem atentiei dumneavoastra aceasta gama de servicii si produse, prin statulul nostru de distribuitor autorizat in Romania. Pe langa aceasta colectivul nostru va ofera si o intreaga gama de echipamente, unelte si accesorii necesare sectorului de confectii si constructii metalice.</p>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-6 py-5 text-start">
                <h5 class="pb-4">Ne puteti gasii la</h5>
                <p><i class="fas fa-envelope"></i> {{email}}</p>
                <p><i class="fas fa-phone"></i> {{phone}}</p>
                <p><a :href="facebook"><i class="fab fa-facebook"></i>
                    {{facebook}}</a></p>
                <p><i class="fas fa-map-marker-alt "></i> {{address}}</p>
            </div>
            <iframe :src="maps" class=" py-5 col-6"/>
        </div>
        
    </div>
</template>

<script>
export default {
    name:'About',
     data(){
        return {
            address:"Doctor Pavel Vasici Ungureanu 12A, 300489, Timisoara",
            email:"office@sam-robotics.ro",
            phone:" +40 722 363 086",
            facebook:'https://facebook.com/SamRoboticsRomania',
            maps:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.70971906125!2d21.2098532159288!3d45.736915979105156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d0aebaaee37%3A0xf65c7e24b66e4115!2sStr.%20Dr.%20Pavel%20Vasici%20Ungureanu%2012a%2C%20Timi%C8%99oara%20300489%2C%20Romania!5e0!3m2!1sen!2suk!4v1594726703629!5m2!1sen!2suk",
        }
    }
}
</script>
<style lang="scss" scoped>
.bg-white{
    background:var(--white);
}
</style>