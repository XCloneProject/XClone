<template>
  <div class="grid grid-cols-3 flex-1 w-full ">

    <!-- Side Bar -->
    <div class="col-span-1 relative ml-56  ">
      <SideBarVue class="fixed h-screen top-0"  @toggle-friends="toggleList" @toggle-messages="toggleList"/>
    </div>  

    <!-- Main -->
    <div class="flex flex-col border-r border-l container">
      <div class="flex justify-center  py-5 font-bold text-3xl my-3">
        <div>Welcome {{ store.state.loggedUser.name }} !!</div>
      </div>
      <AddPost/>
      <PostCompVue/>
    </div>

    <!-- Lists -->
    <div>
      <FriendList :showList="showList" />
      <MessagesList :showMessages="showMessages" />
    </div>

  </div> 
  
</template>

<script setup>
import { ref } from 'vue';
import store from '../store'

import SideBarVue from '@/components/SideBar.vue';
import PostCompVue from '@/components/PostComp.vue';
import AddPost from '@/components/AddPost.vue';
import FriendList from '@/components/FriendList.vue';
import MessagesList from '../components/MessagesList.vue';

const showList = ref(true)
const showMessages = ref(false)

const toggleList = ()=> {
  showList.value=!showList.value;
  showMessages.value = !showMessages.value;
}
</script>

