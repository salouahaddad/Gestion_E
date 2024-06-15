<template>


<div class="card">
    <div class="card-header ">
        <h2 class="mb-0">Liste des étudiants</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="E in etudiants" :key="E.id">
                        <th scope="row">{{E.id}}</th>
                        <td>{{E.nom}}</td>
                        <td>{{E.prenom}}</td>
                        <td>{{E.email}}</td>
                        <td>
                            <router-link :to="'/modifier/'+E.id" class="btn btn-outline-primary btn-sm mr-2">
                                <i class="fas fa-edit"></i> Modifier
                            </router-link> &ensp; 
                            <button @click="Supprimer(E.id)" class="btn btn-outline-danger btn-sm ml-2">
                                <i class="fas fa-trash-alt"></i> Supprimer
                            </button>

                            <router-link :to="'/modulesetu/'+E.id" class="btn btn-outline-primary btn-sm mr-2">
                                 Modules
                            </router-link> &ensp; 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer  text-white  d-flex  ">
      <router-link :to="'/ajouer'" class="btn btn-primary">
        Ajouter étudiant
      </router-link>
        
    </div>
</div>

    

    

   



      </template>
      
      <script>
    
        export default{
            name:'EtuduenT',
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
                 .then(() => {

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
      