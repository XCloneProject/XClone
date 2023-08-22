<template>
  <div class=" flex flex-col mx-auto font-Roboto bg-[#E6E6E6] min-h-screen">
    <NavBarVue/>
    <RouterView/>
  </div>

</template>

<script setup>
import { RouterView } from 'vue-router';
import NavBarVue from './components/NavBar.vue';

</script>

<style>

</style>