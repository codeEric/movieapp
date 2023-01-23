<template>
  <h1>Home</h1>
  <Carousel title="Trending" :data="data" />
</template>

<script setup>
import Carousel from '../Shared/Carousel.vue';

const data = [
  {
    name: 'Image1',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image2',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image3',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image4',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image5',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image6',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image7',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image8',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image9',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image10',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image11',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image12',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
];
</script>
