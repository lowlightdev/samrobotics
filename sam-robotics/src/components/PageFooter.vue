<template>
    <footer class="text-center p-2  mt-auto ml-auto mr-auto justify-self-end">
        <small>copyright <a href="http://sam-robotics.ro">SAM Robotics S.R.L</a> @ {{ new Date().getFullYear() }}</small>
        <br>
        <small class="text-smer">       <font-awesome-icon icon="code"/> with       <font-awesome-icon icon="heart"/>
            by <a href="http://victorz.me">@lowlightdev</a>
        </small>
    </footer>
</template>

<style lang="scss" scoped>
footer{
    @media screen and (max-width: 960px){
        display:flex;
    }
}
small{
    font-size:85%;
}
.text-smer{
    font-size:70%;
}
</style>