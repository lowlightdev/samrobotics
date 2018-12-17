<template>
  <div class="row no-gutters">
    <BannerSection />
    <FeatureSection />
    <InfoSection position="left"/>
    <InfoSection position="right"/>
    <Partners />
    <Footer />
  </div>
</template>

<script>
// @ is an alias to /src
import  BannerSection  from '@/components/BannerSection.vue';
import  FeatureSection  from '@/components/FeatureSection.vue';
import  InfoSection  from '@/components/InfoSection.vue';
import  Partners  from '@/components/Partners.vue';
import  Footer  from '@/components/Footer.vue';

export default {
  name: 'home',
   components: {
    BannerSection,
    FeatureSection,
    InfoSection,
    Partners,
    Footer
  }
}
</script>

<style lang="scss">

</style>
