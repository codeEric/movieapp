<template>
  <div class="home-header-container">
    <h1 class="home-header-txt">A place to find new movies and tv shows</h1>
    <input
      type="text"
      class="home-header-search"
      placeholder="Search here..." />
    <div class="home-header-overlay"></div>
    <img
      class="home-header"
      :src="trendingMoviesDaily[0].backdropOriginal"
      alt="" />
  </div>
  <section class="home-carousel-section">
    <Carousel title="Daily trending" :data="trendingMoviesDaily" />
    <Carousel title="Weekly trending" :data="trendingMoviesWeekly" />
    <Carousel title="Popular movies" :data="popularMovies" />
  </section>
</template>

<script setup>
import Carousel from '../Shared/Carousel.vue';

const props = defineProps({
  popularMovies: Object,
  trendingMoviesDaily: Object,
  trendingMoviesWeekly: Object,
});

console.log(props.popularMovies);

const data = [
  {
    name: 'Image1',
    releaseYear: 2001,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image2',
    releaseYear: 2020,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image3',
    releaseYear: 1992,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image4',
    releaseYear: 2022,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image5',
    releaseYear: 2022,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image6',
    releaseYear: 2021,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image7',
    releaseYear: 2022,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image8',
    releaseYear: 2023,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image9',
    releaseYear: 2019,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image10',
    releaseYear: 2019,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image11',
    releaseYear: 2019,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image12',
    releaseYear: 2016,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image13',
    releaseYear: 1999,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image14',
    releaseYear: 2005,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image15',
    releaseYear: 2011,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image16',
    releaseYear: 2000,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image17',
    releaseYear: 2003,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image18',
    releaseYear: 1990,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image19',
    releaseYear: 1989,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image20',
    releaseYear: 1999,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image21',
    releaseYear: 2001,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image22',
    releaseYear: 2016,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image23',
    releaseYear: 2015,
    type: 'Movie',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
  {
    name: 'Image24',
    releaseYear: 2003,
    type: 'Tv show',
    img: 'https://source.unsplash.com/all/1280x720?film',
  },
];
</script>

<script>
import HomeLayout from '../Shared/HomeLayout.vue';
export default {
  layout: HomeLayout,
};
</script>
