<template>
    <div class="card">
    <div class="card-header ">
        <h2 class="mb-0">Modules et Notes de l'Étudiant : {{ etudiant.nom }} {{ etudiant.prenom }}</h2>
    </div>
    <div class="card-body">

        <div v-for="note in etudiant.notes" :key="note.id" class="mt-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Module : {{ note.module.designation }} - {{ note.module.prof.nom }} {{ note.module.prof.prenom }}</h3>
            <ul class="list-group list-group-flush" v-if="ismodeMod==false">
              <li class="list-group-item">Note : {{ note.note }}</li>
            </ul>
            <ul class="list-group list-group-flush" v-else>
                
    <input type="number" class="form-control" id="note" v-model="note.note" placeholder="Note">
 
            </ul>
            <button class="btn btn-primary" v-if="ismodeMod==false" @click="modifierNote()" >Modifier La Note</button>
            <button class="btn btn-primary"  @click="savenote(note)" v-else>save</button>
          </div>
        </div>
      </div>

    </div>
    <div class="card-footer  text-white  d-flex  ">
        <router-link :to="'/ajouerModuleE/'+etudiant.id" class="btn btn-primary">
            Ajouter module
      </router-link>
    </div>
</div>
   

  </template>
  

  
  
  <script>
  export default {
    name:'ModulesEtU',
            props:{
               
            },
    data() {
      return {
        etudiant:[],
        modulesWithNotes: [],
        ismodeMod:false
      };
    }
    ,
mounted() { 
  fetch("http://127.0.0.1:8000/api/etudiants/etudiantsbymodule/"+this.$route.params.id)
.then(res => res.json())
.then(data =>{console.log(data);
  this.etudiant=data;
} );
/**
fetch("http://127.0.0.1:8000/api/profs")
.then(res => res.json())
.then(data =>{console.log(data);
  this.Profs=data;
} ) */
},
    created() {
      // Appel à une méthode pour récupérer les données des modules et des notes de l'étudiant
     
    },
    methods: {
        modifierNote:function () {
                  this.ismodeMod=true;
                },

                savenote:function (noteM) {
                    var note={};
                    note.id=noteM.id;
                    note.note=noteM.note;
                    note.module_id=noteM.module_id;
                    note.etudiant_id=noteM.etudiant_id;
                    console.log(JSON.stringify(note));
                  
                  fetch('http://127.0.0.1:8000/api/note/'+note.id, {
method: 'PUT',
headers: {
'Content-Type': 'application/json'
},
body: JSON.stringify(note)
}).then(reponse => reponse.json())
.then(() => { 
 this.ismodeMod=false;
}
).catch(erreur => {
console.error(erreur);
});
                },
    }
  };
  </script>
  
  <style scoped>
  /* Ajoutez du CSS si nécessaire */
  </style>
  