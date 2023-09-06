<template>
  <div>
    <hr class="w-full">
    <!-- Profile -->
    <div class=" flex flex-col gap-4 w-full my-2 p-3" v-for="(Post,index) in Posts" :key="index">
        <transition-group class="flex flex-row items-center justify-between" tag="div" name="postList" appear="true">
          <div class="flex flex-row gap-4">
            <div class="avatar  cursor-pointer">
              <div class="w-14 rounded-full">
                <img src="../assets/Profile.jpg" />
              </div>
            </div>
            <div class="flex flex-col">
              <p class="text-xl">Yassine Idr</p>
              <p class="flex-1 text-sm text-slate-300 ">time</p>
            </div>
          </div>
          <div class="dropdown dropdown-bottom ">
            <label tabindex="0"><i class="fa-solid fa-ellipsis cursor-pointer"></i></label>
            <ul tabindex="0" class="dropdown-content z-[1] menu shadow bg-base-200 rounded-box w-56">
              <li><a>Edit</a></li>
              <li @click="toggleConfirmation"><a>Delete post</a></li>
            </ul>
          </div>
        </transition-group>
      <!-- Caption -->
      <p> {{ Post.content }} </p>
      <!-- Photo -->
      <div class="card w-full glass">
        <img src="../assets/post-test.jpg" alt="" class="w-cover">
      </div>
      <!-- Reacts -->
      <div class="flex flex-row justify-between cursor-pointer">
        <div class="flex flex-row gap-7">
          <div @click="handleLike">
            <i class="fa-regular fa-heart text-xl" v-if="!isLiked"></i>
            <i class="fa-solid fa-heart text-xl text-red-600" v-if="isLiked"></i>
          </div>
          <i class="fa-regular fa-comment-dots text-xl"></i>
        </div>
        <i class="fa-solid fa-share text-xl"></i>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted, reactive, ref } from 'vue';
import axios from 'axios';
import store from '../store';

const isLiked = ref(false)
const showDeleteConfirmation = ref(false)

const handleLike = () => {
  isLiked.value = !isLiked.value
}

const toggleConfirmation = ()=>{
  showDeleteConfirmation.value = !showDeleteConfirmation.value;
}

const Posts = ref([])

const getPosts = async ()=>{
  try{
    const response = await axios.get('http://localhost:8000/api/AllPosts',{
            headers:{
                Authorization: `Bearer ${store.state.loggedUser.token}`
            }
        })
    Posts.value = response.data.data
    console.log(Posts.value)
  }catch(err){
    console.log('error',err)
  }
}

onMounted(()=>{
  getPosts()
})
</script>

<style>
.postList-enter-from{
  opacity: 0,5;
  transform: translateY(-10);
}

.postList-enter-to{
  opacity :1 ;
  transform: translateY(0);
}

.postList-enter-active{
  transition: all 3s ease;
}

</style>
