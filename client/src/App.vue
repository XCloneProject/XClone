<template>
  <div class=" flex flex-col flex-1 items-center justify-center font-Roboto  min-h-screen">
    <RouterView/>
  </div>

</template>

<script setup>
import { RouterView } from 'vue-router';
import NavBarVue from './components/SideBar.vue';

</script>

<style>

</style>