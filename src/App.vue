<script setup lang="ts">
import salon from './components/salon.vue'
</script>

<template>
  <div>
    <img class="logo glow" src="./assets/91a30517c00978fd864dedea942f6048.png"/>
  </div>
  <salon/>
</template>

<style scoped>
.logo {
  height: 75vh;
  padding: 1.5em;
  margin-top:0;
  will-change: filter;
  transition: filter 300ms;
}

.logo.glow:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}

</style>
