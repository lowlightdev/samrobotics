<template>
  <main class="container" id="app">
    <header>
      <header-navigation></header-navigation>
    </header>
    <section>
      <router-view/>
    </section>
    <footer>
      <bottom-footer></bottom-footer>
    </footer>
  </main>
</template>

<script>
import BottomFooter from './components/BottomFooter.vue'
import HeaderNavigation from './components/HeaderNavigation.vue'
export default {
  components: { HeaderNavigation, BottomFooter },
  name: 'App',
}
</script>

<style lang="scss">
:root{
  --primary:#007bff;
  --secondary:rgb(209, 37, 31);
  --dark:#333;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background:var(--dark);
  margin:auto;
  padding:0;
  min-height:100vh;
}
body,html{
    background:var(--dark);
}
a{
  text-decoration: none;
}

// custom style
.btn{
  border-radius:5px;
}
.btn-danger{
  background:var(--secondary);
}

</style>
