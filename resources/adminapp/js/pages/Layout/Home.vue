<template>
   <div>
      <Navigation></Navigation>
      <homes-photo></homes-photo>
      <div class="container">
        <Annoucements></Annoucements>
        <hr>
        <Policies></Policies>
        <hr>
        <download></download>
        <hr>
        <ExaminationResults></ExaminationResults>
        <hr>
        <Statistics></Statistics>
        <hr>
        <about-us></about-us>
        <hr>
        <contact></contact>
      </div>
      <TopFooter></TopFooter>
      <ButtomFooter></ButtomFooter>
   </div>
</template>
<script>
import TopFooter from './TopFooter.vue'
import AboutUs from './AboutUs.vue'
import Contact from './Contact.vue'
import Annoucements from './Annoucements.vue'
import Download from './Download.vue'
import ExaminationResults from './ExaminationResults.vue'
import ButtomFooter from './ButtomFooter.vue'
import HomesPhoto from './HomesPhoto.vue'
import Policies   from  './Policies.vue'
import Navigation from   './Navigation.vue'
import Statistics from   './Statistics.vue'
export default {
  components: {
      TopFooter,
      Annoucements,
      Policies,
      Download,
      ButtomFooter,
      HomesPhoto,
      AboutUs,
      Contact,
      Navigation,
      ExaminationResults,
      Statistics
  }
}
</script>