<template>


    <div class="card">
        <div class="card-header ">
            <h2 class="mb-0">Liste des Modules</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">designation</th>
                            <th scope="col">VH</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="E in modules" :key="E.id">
                            <th scope="row">{{E.id}}</th>
                            <td>{{E.designation}}</td>
                            <td>{{E.VH}}</td>
                            <td>
                                <router-link :to="'/modulesmodifier/'+E.id" class="btn btn-outline-primary btn-sm mr-2">
                                    <i class="fas fa-edit"></i> Modifier
                                </router-link> &ensp; 
                                <button @click="Supprimer(E.id)" class="btn btn-outline-danger btn-sm ml-2">
                                    <i class="fas fa-trash-alt"></i> Supprimer
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer  text-white  d-flex  ">
            <button class="btn btn-primary">
                <i class="fas fa-plus-circle mr-1"></i> Ajouter module
            </button>
        </div>
    </div>
    
        
    
        
    
       
    
    
    
          </template>
          
          <script>
        
            export default{
                name:'ModuleS',
                props:{
                   
                },
                data() {
                    return {
                        modules: [
                        ]
                        
                       
                        
                       }
                }
              ,
    mounted() { 
    fetch("http://127.0.0.1:8000/api/Module")
    .then(res => res.json())
    .then(data =>{console.log(data);
      this. modules=data;
    } );
    
    },
                methods: {
                  Supprimer:function(id){
                    fetch(`http://127.0.0.1:8000/api/Module/${id}`,
                     {method: 'DELETE'})
                     .then(() => {
    
                      fetch("http://127.0.0.1:8000/api/Module")
    .then(res => res.json())
    .then(data =>{console.log(data);
      this. modules=data;
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
          