<template>
    <header class="bg-light">
    <div class="row px-4 pt-4" >
        <div class="col-sm-6 col-lg-6 text-start">
            <a class="navbar-brand" href="#"><img src="@/assets/logot.png"/></a>
        </div>
        <div class="col-sm-12 col-lg-6 text-end">
            <div class="grid ms-auto">
                <ul class="social-media-list">
                    <li><i class="fab fa-facebook-square fa-lg"></i></li>
                    <li><i class="fab fa-youtube fa-lg"></i></li>
                    <li><i class="fas fa-envelope fa-lg"></i></li>
                </ul>
                <hr>
                <p class="contact-list">
                    <i class="fa-lg fas fa-phone"></i>
                    <span class="ps-1"> +40 722 363 086</span>
                </p>
            </div>                          
        </div>
    </div>
    <nav class="container navbar navbar-expand-lg navbar-dark bg-transprent mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <router-link to="/" class="nav-link" :class="{'fw-bold border border-top-0 border-start-0 border-end-0 border-danger' : $route.path == '/'}">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="about" class="nav-link" :class="{'fw-bold border border-top-0 border-start-0 border-end-0 border-danger' : $route.path == '/about'}">Despre noi</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="about" class="nav-link" :class="{'fw-bold border border-top-0 border-start-0 border-end-0 border-danger' : $route.path == '/services'}">Servicii</router-link>
                </li>
                 <li class="nav-item">
                    <router-link to="contact" class="nav-link" :class="{'fw-bold border border-top-0 border-start-0 border-end-0 border-danger' : $route.path == '/contact'}">Contact</router-link>
                </li>
            </ul>

            </div>
        </div>
    </nav>
</header>
</template>

<script>
export default {
  name: 'HeaderNavigation',
    data(){
        return {
            activeClass:'border border-top-0 border-start-0 border-end-0 border-danger'
        }
    }
}
</script>

<style lang="scss" scoped>

.grid{
    @media screen and (min-width:940px) {
        width:50%;
    }
}
.navbar{
    background:#55595d;
}

.contact-list{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    cursor: pointer;
    transition:0.25s all ease-in;
    &:hover{
        transition:0.25s all ease-in;
        color:var(--primary)
    }
}
.navbar-brand{
    & img {
        max-height:64px;
    }
}
.social-media-list{
    cursor: pointer;
    text-decoration: none;
    list-style-type: none;
    & > li {
        transition:0.25s all ease-in;
        display: inline-block;
        padding-left:1rem;
        padding-right:1rem;
        &:hover{
            transition:0.25s all ease-in;
            color:var(--primary)
        }
    }
}
</style>
