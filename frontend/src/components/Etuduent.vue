<template>
   <div>

    <div class="card">
  <div class="card-header">
    Etudiant
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Moyenne</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="E in etudiants" :key="E">
      <th scope="row"> {{E.id}}</th>
      <td>{{E.nom}}</td>
      <td>{{E.prenom}}</td>
      <td>{{E.note}}</td>
      <td>
        <router-link :to="'/modifier/'+E.id" type="button" class="btn btn-outline-primary">
Edit
</router-link> /
       
        <button type="button" @click="Supprimer(E.id)" class="btn btn-outline-danger">Supprimer</button>
      </td>
    </tr>
    
  </tbody>
</table>


    
    </div>
  </div>
</div>


      </template>
      
      <script>
    
        export default{
            name:'Etuduent',
            props:{
               
            },
            data() {
                return {
                    etudiants: [
                    ]
                    
                   
                    
                   }
            }
          ,
mounted() { 
fetch("http://127.0.0.1:8000/api/etudiants")
.then(res => res.json())
.then(data =>{console.log(data);
  this. etudiants=data;
} );

},
            methods: {
              Supprimer:function(id){
                fetch(`http://127.0.0.1:8000/api/etudiants/${id}`,
                 {method: 'DELETE'})
                 .then(reponse => {

                  fetch("http://127.0.0.1:8000/api/etudiants")
.then(res => res.json())
.then(data =>{console.log(data);
  this. etudiants=data;
} );
                 })
.catch(erreur => {
console.error(erreur);
});
              },
              Modifier:function(){}
            },
        }
      </script>
      
      <style scoped>
    
   
      </style>
      