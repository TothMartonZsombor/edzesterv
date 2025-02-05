<script>

import UjGyakorlat from "./components/UjGyakorlat.vue";


export default {
  data(){
    return{
      bejegyzes: []
    }
  },
  components: {
    UjGyakorlat
  }
}
</script>

<template>
  
<div class="container">
  <div class="row">
      <div class="col-lg-6" >
        <UjGyakorlat @rogzit="rogzit" :bejegyzes="bejyegyzes"/>
      </div>
      <div class="col-lg-6">
        {{ bejegyzes }}
      </div>

  </div>
  


</div>

</template>

<style scoped>



</style>
