<template>
  <Header />

  <section class="main-layout-section">
    <slot />
  </section>
</template>

<script setup>
import Header from './Header.vue';
</script>
