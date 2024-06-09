<template>
  <div class="hello">
    <h1>Ajouter Etuduent</h1>
    <div class="modal-body">
        <div class="mb-3">
  <input type="text" class="form-control" id="nom" v-model="etudiant.nom"  placeholder="Nom">
</div>
<div class="mb-3">
  <input type="text" class="form-control" id="prenom" v-model="etudiant.prenom"  placeholder="Prenom">
</div>
<div class="mb-3">
  <input type="number" class="form-control" id="note" v-model="etudiant.note" placeholder="Note">
</div>
<div class="mb-3">
  <label>Prof</label>
  <select class="form-select"  placeholder="Prof"  v-model="etudiant.prof_id">
  <option v-for="P in Profs" :key="P" v-bind:value="P.id">{{P.nom}} - {{ P.prenom }} </option>

</select>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  @click="goback()" >Close</button>
        <button type="button" @click="modifier()" class="btn btn-primary">Save</button>
      </div>
  </div>
</template>

<script>


export default {
  name: 'ModifierEtuduent',
  props: {
    msg: String
  },
  data() {
    return {
      Profs: [
                    ],
                    etudiant:{
                      id:"",
                      nom:"",
                      prenom:"",
                      note:"",
                      prof_id:""
                    }
    }}
    ,
mounted() { 
  fetch("http://127.0.0.1:8000/api/etudiants/"+this.$route.params.id)
.then(res => res.json())
.then(data =>{console.log(data);
  this.etudiant=data;
} );
fetch("http://127.0.0.1:8000/api/profs")
.then(res => res.json())
.then(data =>{console.log(data);
  this.Profs=data;
} )
},
            methods: {
              goback:function () {
                console.log(this.$router)
                this.$router.push({path:"/"})
              },

                modifier:function () { 
                  console.log(JSON.stringify(this.etudiant));
                  fetch('http://127.0.0.1:8000/api/etudiants/'+this.$route.params.id, {
method: 'PUT',
headers: {
'Content-Type': 'application/json'
},
body: JSON.stringify(this.etudiant)
}).then(reponse => reponse.json())
.then(etd => { 
  this.$router.push({path:"/"})
}
).catch(erreur => {
console.error(erreur);
});
                }
            },
        
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
