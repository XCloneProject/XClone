<template>
  <div class="px-5 flex flex-col gap-3 " v-if="showSign">
    <form @submit.prevent="register">
      <h1 class="text-4xl text-center my-5 font-bold">Sign Up</h1>
      <p class="text-md text-[#4D4D4D] text-center">Fill the form below</p>
      <div class="relative">
        <input  type="text" 
              id="username"
              placeholder="Enter username" required 
              v-model="User.username"
              class=" peer placeholder-transparent w-full bg-transparent border-b border-[#ADADAD] my-3 px-1 focus:border-black focus:outline-none">
        <label for="username" class="absolute left-0  -top-3.5 hover:cursor-text  peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm transition-all ">Username</label>
      </div>
      <div class="relative mt-3">
        <input  type="email" 
              id="email"
              placeholder="Enter email" required
              v-model="User.email"
              class="w-full peer placeholder-transparent bg-transparent border-b border-[#ADADAD] my-3 px-1  focus:border-black focus:outline-none">
        <label for="email" class="absolute left-0 -top-3.5 hover:cursor-text  peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-1.5 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm transition-all ">Email</label>
      </div>
      
      <div class="grid grid-cols-2 gap-3 mt-3">
        <div class="relative ">
          <input type="password" 
                 id="password"
                 placeholder="Enter your password" required
                 v-model="User.password"
                 class="w-full peer placeholder-transparent bg-transparent border-b border-[#ADADAD]  my-3 px-1  focus:border-black focus:outline-none">
          
          <label for="password" 
                 class="absolute left-0-top-3.5 hover:cursor-text peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm transition-all ">Password</label>
        </div>
        <div class="relative">
          <input type="password" 
                  id="confirmPassword"
                 placeholder="Confirm your password" required
                 v-model="User.passwordConfirm"
                 class="w-full peer placeholder-transparent bg-transparent border-b border-[#ADADAD]  my-3 px-1 focus:border-black focus:outline-none">
          
           <label for="confirmPassword" 
                  class="absolute left-0 -top-3.5 peer-placeholder-shown:text-base hover:cursor-text peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm transition-all ">Confirm password</label>
          </div>
          
                </div>
      <div class="grid grid-cols-2 gap-5 my-5">
      <div class="flex justify-center">
        <button class="btn btn-active btn-neutral mt-5 w-2/3 px-10" >Register</button>
    </div>
    <div class="flex justify-center">
        <button class="btn btn-active btn-neutral mt-5 w-2/3 px-1" @click="$emit('toggle-sign')">Back to login</button>
    </div>
    </div>
    </form>
    
    
  </div>
</template>

<script setup>
  import axios from 'axios'
  import { useRouter } from 'vue-router';

  defineEmits(['toggle-sign'])
  defineProps({
      showSign : {
        type: Boolean, 
        default: false
      }
    })

  const router = useRouter()
  const User = {
    username:'',
    email:'',
    password:'',
    passwordConfirm:''
  }

  const register = async () => {
    try{
      const response = await axios.post('URL',User)
      console.log(response)
      router.push({name:'login'})
    }catch(err){
      console.log(err)
    }
  }

</script>

<style lang="scss" scoped></style>