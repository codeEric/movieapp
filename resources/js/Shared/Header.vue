<template>
  <header class="header">
    <Link class="title" href="/">Movie app</Link>

    <Nav />

    <div class="header-auth-container">
      <Link class="login" href="/login">Login</Link>
      <Link class="register" href="/register">Register</Link>
    </div>
  </header>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Nav from './Nav.vue';
</script>
