<script setup>
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
  <Head title="Dashboard" />
  <App>
    <div class="text">Dashboard</div>
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
</style>
