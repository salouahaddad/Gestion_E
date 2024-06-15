<template>
      <header class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <router-link to="/" class="navbar-brand">Gestion Etudient</router-link>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <router-link to="/etudient" class="nav-link">Etudients</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/etudient" class="nav-link">Profs</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/modules" class="nav-link">Modules</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/ajouer" class="nav-link">Ajouter Etudient</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/contact" class="nav-link">Contact</router-link>
          </li>
        </ul>
      </div>
    </div>
  </header>

      

  </template>
  
  <script>
  export default {
    name: 'HEADER',
    props: {
      msg: String
    }
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
  