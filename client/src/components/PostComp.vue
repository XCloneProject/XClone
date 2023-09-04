<template>
  <div>
    <hr class="w-full">
    <!-- Profile -->
    <div class=" flex flex-col gap-4 w-full my-2 p-3">
      <div class="flex flex-rowitems-center justify-between">
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
      </div>
      <!-- Caption -->
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus at exercitationem voluptas cum itaque voluptatum
        iure, veritatis quibusdam </p>
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
import { ref } from 'vue';
import axios from 'axios';

const isLiked = ref(false)
const showDeleteConfirmation = ref(false)
const Posts = [{
  id: "",
  photo: null,
  caption: ""
}]

const handleLike = () => {
  isLiked.value = !isLiked.value
}

const toggleConfirmation = ()=>{
  showDeleteConfirmation.value = !showDeleteConfirmation.value;
}
</script>

