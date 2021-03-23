<template>
    <nav class="container navbar navbar-expand-lg navbar-light bg-transprent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="@/assets/logot.png"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <router-link to="/" class="nav-link" :class="{'fw-bold border border-top-0 border-start-0 border-end-0 border-danger' : $route.path == '/'}">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="about" class="nav-link" :class="{'fw-bold border border-top-0 border-start-0 border-end-0 border-danger' : $route.path == '/about'}">Despre noi</router-link>
                </li>
                 <li class="nav-item">
                    <router-link to="contact" class="nav-link" :class="{'fw-bold border border-top-0 border-start-0 border-end-0 border-danger' : $route.path == '/contact'}">Contact</router-link>
                </li>
            </ul>

            </div>
        </div>
    </nav>
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
.navbar-brand{
    & img {
        max-height:56px;
    }
}
</style>
