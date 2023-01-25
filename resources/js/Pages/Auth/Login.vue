<template>
  <div class="login-container">
    <h1 class="login-title">Welcome back!</h1>
    <form class="login-form" action="">
      <div class="input-wrapper">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" />
      </div>
      <div class="input-wrapper">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
      </div>

      <button type="submit">Log In</button>
    </form>

    <p class="login-no-account">
      Don't have an account yet? <Link href="/register">Register here</Link>
    </p>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
