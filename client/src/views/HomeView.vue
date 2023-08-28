<template>
  <div class="grid grid-cols-3 flex-1 w-full ">
    <div class="col-span-1 relative ml-56  ">
      <SideBarVue class="fixed h-screen top-0"/>
    </div>  
    <div class="flex flex-col border px-5">
      <div class="flex justify-center border py-5 font-bold text-3xl my-3 rounded-md">
        <div>Welcome {{ store.state.loggedUser.name }} !!</div>
      </div>
      <AddPost class="border my-3 rounded-md"/>
      <PostCompVue class="col-span-2 border my-3 p-3 rounded-md"/>
    </div>
    
  </div> 
  
</template>

<script setup>
import SideBarVue from '../components/SideBar.vue';
import PostCompVue from '../components/PostComp.vue';
import AddPost from '../components/AddPost.vue';
import store from '../store'
</script>

