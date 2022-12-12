<script setup>
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Head title="bACKtest" />
  <App>
    <div class="text">bACKtest</div>
  </App>
</template>
<script>
import App from "@/Layouts/App.vue";
export default {
  components: {
    App,
  },
};
</script>

<style>
.home-section {
  position: relative;
  background: #e4e9f7;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .home-section {
  left: 250px;
  width: calc(100% - 250px);
}
.home-section .text {
  display: inline-block;
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px;
}
</style>
