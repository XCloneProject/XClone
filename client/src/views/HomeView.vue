<template>
  <div class="grid grid-cols-3 flex-1 w-full  ">
    <SideBarVue class="col-span-1 "/>
    <PostCompVue class="border col-span-2"/>
  </div> 
  
</template>

<script setup>
import SideBarVue from '../components/SideBar.vue';
import PostCompVue from '../components/PostComp.vue';
</script>

