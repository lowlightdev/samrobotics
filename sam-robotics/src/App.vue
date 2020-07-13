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
  border: 0px solid  rgb(112, 112, 112) !important;
  &:hover{
    transition: all linear 0.2s;
    box-shadow:  inset 0 0 5px rgb(112, 112, 112) !important;
    border: 1px solid  rgb(112, 112, 112) !important;
  }
}
</style>
