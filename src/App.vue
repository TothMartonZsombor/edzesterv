<script>

import UjGyakorlat from "./components/UjGyakorlat.vue";


export default {
  data(){
    return{
      bejegyzesek: []

    }
  },
  components: {
    UjGyakorlat
  },
  methods: {
    rogzit(ujBejegyzes){
      this.bejegyzes.push(bejegyzesek);
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
        {{ bejegyzesek }}
      </div>

  </div>
  


</div>

</template>

<style scoped>



</style>
