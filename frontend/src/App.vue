<template>
<div id="app">

    <HEADER></HEADER>
<body>
  <main >
    <div class="container-fluid">
    <router-view></router-view>
  </div>
  </main>
</body>
  

    <FOOTER></FOOTER>
</div>
</template>

<script>
import  HEADER from './components/Header.vue'
import  FOOTER from './components/footer.vue'
export default {
  name: 'App',
  components: {
    HEADER,
    FOOTER
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0px;
}
body {
    position: fixed;
    top: 10;
    left: 0;
    width: 100%;
    height: 90%;
    max-height: 70%;
    overflow-y: auto; 
    /* Ajoute une barre de défilement verticale si nécessaire */
    
}
header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%; /* Pour s'assurer que le header occupe toute la largeur de la fenêtre */
    background-color: #ffffff; /* Couleur de fond du header */
    z-index: 1000; /* Assure que le header est en avant-plan et ne sera pas masqué par d'autres éléments */
    /* Ajoutez d'autres styles selon vos besoins */
}
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    max-height: 20%;
    width: 100%; /* Pour s'assurer que le footer occupe toute la largeur de la fenêtre */
    background-color: #ffffff; /* Couleur de fond du footer */
    z-index: 1000; /* Assure que le footer est en avant-plan et ne sera pas masqué par d'autres éléments */
    /* Ajoutez d'autres styles selon vos besoins */
}
</style>
