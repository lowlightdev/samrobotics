<template>
  <div id="app" class="container-fluid">
    <Menu/>
    <router-view/>
  </div>
</template>

<script>
// @ is an alias to /src
import Menu from '@/components/Menu.vue'

export default {
  name: 'app',
  components: {
    Menu
  }
}
</script>

<style lang="scss">
#app{
  padding:0;
  margin:0;
}
html,body{
  padding:0;
  margin:0;
  width:100%;
  height:100%;
}
</style>
