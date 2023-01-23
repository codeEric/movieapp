<template>
  <div class="carousel-container">
    <h1>{{ title }}</h1>
    <ul class="carousel-list">
      <li v-for="item in data" :style="st">
        <p>{{ item.name }}</p>
        <img :src="item.img" :alt="item.name" />
      </li>
      <button class="corousel-btn-left" @click="prevPage">
        <box-icon name="chevron-left" color="white"></box-icon>
      </button>
      <button class="corousel-btn-right" @click="nextPage">
        <box-icon name="chevron-right" color="white"></box-icon>
      </button>
    </ul>
  </div>
</template>

<script setup>
import 'boxicons';
import { ref, reactive } from 'vue';
defineProps({ title: String, data: Array });

const maxPage = 1;

let page = ref(0);

let st = reactive({
  transform: `translateX(${page.value}px)`,
});

const updateStyle = () => {
  st.transform = `translateX(${-615 * 3 * page.value}px)`;
};

const nextPage = () => {
  page.value = page.value >= maxPage ? 0 : page.value + 1;
  updateStyle();
};

const prevPage = () => {
  page.value = page.value <= 0 ? maxPage : page.value - 1;
  updateStyle();
};
</script>
