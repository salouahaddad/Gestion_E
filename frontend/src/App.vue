<template>
<div id="app">
  <header>
    <HEADER></HEADER>
  </header>
  <main>
    <router-view></router-view>
  </main>
  <footer>footer</footer>
</div>
</template>

<script>
import  HEADER from './components/Header.vue'
export default {
  name: 'App',
  components: {
    HEADER
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
  margin-top: 60px;
}
</style>
