<template>
  <Header />

  <section>
    <slot />
  </section>

  <footer></footer>
</template>

<script setup>
import Header from './Header.vue';
</script>
