<script>

export default{
  data(){
    return{
      bejegyzes:{
        gyakorlat: '',
        ismetlesszam: 0
      }
    }
  }
}

</script>

<template>
  
  <div class="card" >
    <div class="card-body">
      <h3 class="card-title">Új gyakorlat rögzítése</h3>
      <p class="card-text">
        <label for="gyakorlat" class="form-label">Elvégzett gyakorlat</label>
        <select class="form-select" aria-label="Default select example" v-model="gyakorlat">
          <option selected value="fekvenyomas">Fekvenyomás</option>
          <option value="guggolas">Guggolás</option>
          <option value="lehuzas">Lehúzas csigán</option>
          <option value="bicepsz">Bicepsz hajlítás</option>
          <option value="tricepsz">Tricepsz lenyomás</option>
        </select>

        <label for="ismetlesszam" class="form-label">Sorozatszám</label>
        <input type="number" class="form-control" id="ismetlesszam" min="0" max="8" v-model="ismetlesszam">

        <button type="button" class="btn btn-danger" @click="rogzit()">Rögzít</button>
      </p>
      
    </div>
  </div>

</template>

<style scoped>



</style>
