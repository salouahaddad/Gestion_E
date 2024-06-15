<template>
    <footer class="footer bg-dark text-light py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h5>À propos de nous</h5>
            <p>Nous sommes une entreprise dédiée à fournir des solutions innovantes à nos clients.</p>
          </div>
          <div class="col-md-3">
            <h5>Liens utiles</h5>
            <ul class="list-unstyled">
              <li><router-link to="/">Accueil</router-link></li>
              <li><router-link to="/services">Services</router-link></li>
              <li><router-link to="/contact">Contact</router-link></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Contact</h5>
            <p>Adresse: 123 Rue Principale, Ville, Pays</p>
            <p>Téléphone: +123456789</p>
            <p>Email: info@example.com</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <p class="text-center">© 2024 Mon Entreprise. Tous droits réservés.</p>
          </div>
        </div>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    name: 'FOOTER'
  }
  </script>
  
  <style scoped>
  /* Ajoutez ici vos styles personnalisés pour le footer si nécessaire */
  </style>
  