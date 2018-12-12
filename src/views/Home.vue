<template>
  <div class="row">
    <BannerSection />
    <FeatureSection />
    <InfoSection position="left"/>
    <InfoSection position="right"/>
    <Acreditation />
    <Blog />
    <Footer />
  </div>
</template>

<script>
// @ is an alias to /src
import  BannerSection  from '@/components/BannerSection.vue';
import  FeatureSection  from '@/components/FeatureSection.vue';
import  InfoSection  from '@/components/InfoSection.vue';
import  Acreditation  from '@/components/Acreditation.vue';
import  Blog  from '@/components/Blog.vue';
import  Footer  from '@/components/Footer.vue';

export default {
  name: 'home',
   components: {
    BannerSection,
    FeatureSection,
    InfoSection,
    Acreditation,
    Blog,
    Footer
  }
}
</script>

<style lang="scss">

</style>
