<template>
    <div >
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <router-link class="nav-link active" aria-current="page" to="/">Etuduent</router-link>
                <router-link class="nav-link" aria-current="page" to="/ajouer">Ajouter Etuduent</router-link>
            </ul>
          </div>
        </nav>
    </div>
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
  