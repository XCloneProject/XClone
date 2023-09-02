<template>
  <div class="grid grid-cols-6 flex-1 w-full ">

    <!-- Side Bar -->
    <div class="col-span-2 relative ">
      <SideBarVue class="fixed h-screen top-0"  @toggle-friends="toggleFriend" @toggle-messages="toggleMessages"/>
    </div>  

    <!-- Main -->
    <div class="flex flex-col col-span-2 border-r border-l container ">
      <div class="flex justify-center  py-5 font-bold text-3xl my-3">
        <div>Welcome {{ store.state.loggedUser.name }} !!</div>
      </div>
      <AddPost/>
      <PostCompVue/>
    </div>

    <!-- Lists -->
    <div class="col-span-2">
      <FriendsOverall :showList="showList" />
      <MessagesList :showMessages="showMessages"/>
    </div>

  </div> 
  
</template>

<script setup>
import { ref } from 'vue';
import store from '../store'

import SideBarVue from '@/components/SideBar.vue';
import PostCompVue from '@/components/PostComp.vue';
import AddPost from '@/components/AddPost.vue';
import MessagesList from '../components/MessagesList.vue';
import FriendsOverall from '../components/FriendsOverall.vue';

const showList = ref(true)
const showMessages = ref(false)

const toggleFriend = ()=> {
  showList.value= true;
  showMessages.value = false;
}


const toggleMessages = ()=>{
  showMessages.value = true;
  showList.value = false;
}
</script>

