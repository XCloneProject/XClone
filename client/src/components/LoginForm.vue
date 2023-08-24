<template>
    <div class="px-5 flex flex-col gap-5" v-if="showLogin" >
      <form @submit.prevent="handleLogin">
        <div>
          <h1 class="text-4xl text-center my-5 text-[#262626] font-bold">Login</h1>
        <p class="text-md text-[#262626]  text-center my-3">Login easily if you are already a member</p>
        </div>
        
        <div class="relative mt-5">
          <input type="text" placeholder="Enter username or email"
                id="email"
               v-model="User.email"
               class="w-full peer placeholder-transparent bg-transparent border-b border-[#ADADAD]  my-3  px-1  focus:border-black focus:outline-none">
          <label for="email" class="absolute left-0 -top-3.5 hover:cursor-text  peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-1.5 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm transition-all ">Email</label>
        </div>

        <div class="relative my-5">
          <input type="password" placeholder="Password"
              id="password"
               v-model="User.password"
               class="w-full peer placeholder-transparent  bg-transparent border-b border-[#ADADAD]  my-3 px-1  focus:border-black focus:outline-none">
          <label for="password" class="absolute left-0 -top-3.5 hover:cursor-text   peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-1.5 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm transition-all ">Password</label>
        </div>
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
  import axios from 'axios'
  const User = {
    email:'',
    password:''
  }
  defineEmits(['toggle-sign'])
  defineProps({
    showLogin : {
      type: Boolean, 
      default: true
    }
  })
  const handleLogin = async () =>{
    try{
      const response = await axios.post('login',User,config)
      localStorage.setItem('token',response.data.token)
    }catch(err){
      console.log( err);
    }
    
  }
</script>

