<template>
  <div class="auth-container">
    <h1 class="auth-title">Welcome back!</h1>
    <form class="auth-form" action="">
      <div class="input-wrapper">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required />
      </div>
      <div class="input-wrapper">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
      </div>

      <button type="submit">Log In</button>
    </form>

    <p class="auth-account-subtxt">
      Don't have an account yet? <Link href="/register">Register here</Link>
    </p>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
