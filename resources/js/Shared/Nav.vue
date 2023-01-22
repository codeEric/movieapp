<template>
  <nav class="nav">
    <ul class="nav-list">
      <li class="nav-list-item">
        <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
      </li>
      <li class="nav-list-item"><NavLink href="/movies">Movies</NavLink></li>
      <li class="nav-list-item"><NavLink href="/tv">TV shows</NavLink></li>
      <li class="nav-list-item">
        <NavLink href="/watch-later">Watch later</NavLink>
      </li>
      <li class="nav-list-item">
        <NavLink href="/favorites">Favorites</NavLink>
      </li>
    </ul>
  </nav>
</template>

<script setup>
import NavLink from './NavLink.vue';
</script>
