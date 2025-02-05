<script>

import UjGyakorlat from "./components/UjGyakorlat.vue";
import Listaz from "./components/Listaz.vue";


export default {
  data(){
    return{
      bejegyzesek: []

    }
  },
  components: {
    UjGyakorlat,
    Listaz
  },
  methods: {
    rogzit(bejegyzes){
      this.bejegyzesek.push(bejegyzes);

    }
  }
}
</script>

<template>
  
<div class="container">
  <div class="row">
      <div class="col-lg-6" >
        <UjGyakorlat @rogzit="rogzit" :bejegyzes="bejegyzes"/>
      </div>
      <div class="col-lg-6">
        <Listaz/>
      </div>

  </div>
  


</div>

</template>

<style scoped>



</style>
