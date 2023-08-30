<template>
  <div class="grid grid-cols-3 flex-1 w-full ">
    <div class="col-span-1 relative ml-56  ">
      <SideBarVue class="fixed h-screen top-0"/>
    </div>  
    <div class="flex flex-col border-r border-l container">
      <div class="flex justify-center  py-5 font-bold text-3xl my-3">
        <div>Welcome {{ store.state.loggedUser.name }} !!</div>
      </div>
      <AddPost/>
      <PostCompVue/>
    </div>
    <!-- Lists -->
    <div>
      <friendList/>
    </div>
  </div> 
  
</template>

<script setup>
import SideBarVue from '../components/SideBar.vue';
import PostCompVue from '../components/PostComp.vue';
import AddPost from '../components/AddPost.vue';
import friendList from '../components/friendList.vue';
import store from '../store'
</script>

