<template>
  <div id="app ">
    <router-view class=""/>
  </div>
</template>

<style lang="scss">
html,body, #app{
    font-family: 'Roboto', sans-serif !important;
}
.background{
  &--red{
    background:#A50104;
  }
  &--blue{
    background:#0096c7;
  }
}
.block{
  @media screen and (min-width: 960px){
    min-height:200px;
    min-width:200px;
  }
  min-width:150px;
  min-height:150px;
  display:flex;
  align-content: center;
  align-items: center;
  text-align: center;
  transition: all linear 0.2s;
  &:hover{
    transition: all linear 0.2s;
    box-shadow: 0px 5px 15px rgb(34, 34, 34) !important;
  }
}
</style>
