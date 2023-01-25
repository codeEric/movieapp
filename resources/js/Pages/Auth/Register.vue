<template>
  <div class="auth-container">
    <h1 class="auth-title">Get started!</h1>
    <form class="auth-form" action="">
      <div class="input-wrapper">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required />
      </div>

      <div class="input-wrapper">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
      </div>

      <div class="input-wrapper">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
      </div>

      <div class="input-wrapper">
        <label for="confirm-password">Confirm password</label>
        <input
          type="password"
          name="confirm-password"
          id="confirm-password"
          required />
      </div>

      <button type="submit">Register</button>
    </form>

    <p class="auth-account-subtxt">
      Already have an account? <Link href="/login">Login here</Link>
    </p>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
