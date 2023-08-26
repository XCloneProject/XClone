<template>
  <div class="grid grid-cols-3 flex-1 w-full  ">
    <SideBarVue class="col-span-1 "/>
    <div class="flex flex-col">
      <AddPost class="border my-5 rounded-md"/>
      <PostCompVue class="col-span-2 border"/>
    </div>
    
  </div> 
  
</template>

<script setup>
import SideBarVue from '../components/SideBar.vue';
import PostCompVue from '../components/PostComp.vue';
import AddPost from '../components/AddPost.vue';
</script>

