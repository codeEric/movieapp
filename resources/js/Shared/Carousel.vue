<template>
  <div class="carousel-container">
    <h1>{{ title }}</h1>
    <ul class="carousel-list">
      <li v-for="item in data" :style="st" ref="itemRefs">
        <div class="carousel-overlay">
          <div class="carousel-info">
            <p>
              {{ item.release_date ?? item.first_air_date }}
              &#8226;
              <CIcon icon="cilMovie" v-if="item.media_type === 'movie'" />
              <CIcon icon="cilTv" v-else />
              {{ item.media_type }}
            </p>
            <p class="carousel-movie-title">{{ item.name ?? item.title }}</p>
          </div>
        </div>
        <img
          :src="'https://image.tmdb.org/t/p/w500/' + item.backdrop_path"
          :alt="item.name" />
      </li>
      <button class="corousel-btn-left" @click="prevPage">
        <CIcon icon="cilChevronLeft" />
      </button>
      <button class="corousel-btn-right" @click="nextPage">
        <CIcon icon="cilChevronRight" />
      </button>
    </ul>
  </div>
</template>

<script setup>
import { CIcon } from '@coreui/icons-vue';
import { ref, reactive, onMounted, onUnmounted } from 'vue';

const props = defineProps({ title: String, data: Array });

const itemRefs = ref('');

let imgPerPage;
let maxPage;
let page = ref(0);

let scrollSize;

let st = reactive({
  transform: `translateX(${page.value}px)`,
});

const updateStyle = () => {
  st.transform = `translateX(${-scrollSize * imgPerPage * page.value}px)`;
};

const nextPage = () => {
  page.value = page.value >= maxPage ? 0 : page.value + 1;
  updateStyle();
};

const prevPage = () => {
  page.value = page.value <= 0 ? maxPage : page.value - 1;
  updateStyle();
};

const getDimensions = () => {
  const pageWidth = window.innerWidth;

  if (pageWidth >= 1200) {
    imgPerPage = 6;
  } else if (pageWidth >= 992 && pageWidth < 1200) {
    imgPerPage = 4;
  } else if (pageWidth >= 768 && pageWidth < 992) {
    imgPerPage = 3;
  } else {
    imgPerPage = 2;
  }
  maxPage = props.data.length / imgPerPage - 1;
  page.value = page.value > maxPage ? maxPage : page.value;

  scrollSize = itemRefs.value[0].clientWidth + 40;

  updateStyle();
};

onMounted(() => {
  getDimensions();
  window.addEventListener('resize', getDimensions);
});
onUnmounted(() => {
  window.removeEventListener('resize', getDimensions);
});
</script>
