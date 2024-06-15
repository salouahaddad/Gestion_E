<template>
    <div class="hello">
      <h1>Ajouter module de Etudient</h1>
      <div class="modal-body">
        <div class="mb-3">
  <label>Module</label>
  <select class="form-select"  placeholder="Module"  v-model="note.module_id">
  <option v-for="P in modules" :key="P" v-bind:value="P.id">{{P.designation}} - {{ P.VH }} </option>

</select>
</div>
 
  <!--
  <div class="mb-3">
    <input type="number" class="form-control" id="note" v-model="etudiant.note" placeholder="Note">
  </div>
  <div class="mb-3">
    <label>Prof</label>
    <select class="form-select"  placeholder="Prof"  v-model="etudiant.prof_id">
    <option v-for="P in Profs" :key="P" v-bind:value="P.id">{{P.nom}} - {{ P.prenom }} </option>
  
  </select>
  
  </div>
  -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary"  @click="goback()" >Close</button>
          <button type="button" @click="ajouternote()" class="btn btn-primary">Save</button>
        </div>
    </div>
  </template>
  
  <script>
  
  export default {
    name: 'AjouerModuleE',
    props: {
      msg: String
    },
    data() {
      return {
        note:{
            id:0,
            note:0,
            etudiant_id:0,
            module_id:0
            
        },
        modules:[]
      }}
      ,
  mounted() { 
    
  fetch("http://127.0.0.1:8000/api/Module")
  .then(res => res.json())
  .then(data =>{console.log(data);
    this.modules=data;
  } );
     
  },
              methods: {
                goback:function () {
                  this.$router.push({path:"/"})
                },
                  ajouternote:function () {
                   this.note.etudiant_id =this.$route.params.id;
                    console.log(JSON.stringify(this.note));
                    fetch('http://127.0.0.1:8000/api/note', {
  method: 'POST',
  headers: {
  'Content-Type': 'application/json'
  },
  body: JSON.stringify(this.note)
  }).then(reponse => reponse.json())
  .then(() => { 
    this.$router.push({path:"/"})
  }
  ).catch(erreur => {
    console.log(erreur)
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
  