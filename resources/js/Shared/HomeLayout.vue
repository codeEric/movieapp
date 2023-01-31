<template>
  <Header />

  <section class="home-layout-section">
    <slot />
  </section>

  <footer></footer>
</template>

<script setup>
import Header from './Header.vue';
</script>
