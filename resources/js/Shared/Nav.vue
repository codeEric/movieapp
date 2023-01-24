<template>
  <nav class="nav">
    <ul class="nav-list">
      <li class="nav-list-item">
        <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
      </li>
      <li class="nav-list-item">
        <NavLink href="/movies" :active="$page.component === 'Movies'"
          >Movies</NavLink
        >
      </li>
      <li class="nav-list-item">
        <NavLink href="/tv" :active="$page.component === 'TvShows'"
          >TV shows</NavLink
        >
      </li>
      <li class="nav-list-item">
        <NavLink href="/watch-later" :active="$page.component === 'WatchLater'"
          >Watch later</NavLink
        >
      </li>
      <li class="nav-list-item">
        <NavLink href="/favorites" :active="$page.component === 'Favorites'"
          >Favorites</NavLink
        >
      </li>
    </ul>
  </nav>
</template>

<script setup>
import NavLink from './NavLink.vue';
</script>
