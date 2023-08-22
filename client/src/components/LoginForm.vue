<template>
    <div class="px-5 flex flex-col" v-if="showLogin" >
      <form action="">
        <h1 class="text-4xl text-center my-5 text-[#262626] font-bold">Login</h1>
        <p class="text-md text-[#262626]  text-center">Login easily if you are already a member</p>

        <input type="text" placeholder="Enter username or email"
          class="w-full bg-transparent border-b border-[#ADADAD]  my-8 px-1 py-2 focus:border-black focus:outline-none">

        <input type="password" placeholder="Enter password"
          class="w-full bg-transparent border-b border-[#ADADAD]  my-5 px-1 py-2 focus:border-black focus:outline-none">
        <div class="flex justify-center">
          <button class="btn btn-active btn-neutral mt-5 w-1/3 px-10 text-[#ADADAD]">Login</button>
        </div>
        <div class="grid grid-cols-3 items-center my-2 p-5 ">
          <hr class="border-[#262626] ">
          <p class="text-center">Or</p>
          <hr class="border-[#262626] ">
        </div>
        
      </form>
      <div class="flex flex-col justify-center items-center">
          <button class="btn btn-active btn-neutral w-1/3 px-10 text-[#ADADAD]" @click="$emit('toggle-sign')">Sign Up</button>
          <p class="text-md text-[#4D4D4D] text-center mt-4">If you don't have an account</p>
        </div>
    </div>
</template>

<script setup>
  import {ref} from 'vue'
  defineEmits(['toggle-sign'])
  defineProps({
    showLogin : {
      type: Boolean, 
      default: true
    }
  })
</script>

