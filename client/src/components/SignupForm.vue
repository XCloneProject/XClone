<template>
  <div class="px-5 flex flex-col" v-if="showSign">
    <form action="">
      <h1 class="text-4xl text-center my-5 font-bold">Sign Up</h1>
      <p class="text-md text-[#4D4D4D] text-center">Fill the form below</p>
      <p class="mt-2">Username<span class=" text-red-500">*</span></p>
      <input  type="text" 
              placeholder="Enter username or email" required
              class="w-full bg-transparent border-b border-[#ADADAD]  mt-1 px-1 py-2 focus:border-black focus:outline-none">
      
      <p class="mt-2">Email<span class=" text-red-500">*</span></p>
      <input  type="email" 
              placeholder="Enter email" required
              class="w-full bg-transparent border-b border-[#ADADAD] mt-1 px-1 py-2 focus:border-black focus:outline-none">
      
      <p class="mt-2">Birth date<span class=" text-red-500">*</span></p>
      <input type="date" 
             placeholder="Enter your birth date" required
             class="w-full bg-transparent border-b border-[#ADADAD]  mt-1 px-1 py-2 focus:border-black focus:outline-none">
      
      <div class="grid grid-cols-2  gap-3">
        <div>
          <p class="mt-3">Password <span class=" text-red-500">*</span></p>
          <input type="password" 
                 placeholder="Enter your password" required
                 class="w-full bg-transparent border-b border-[#ADADAD]  mt-1 px-1 py-2 focus:border-black focus:outline-none">
        </div>
        <div>
          <p class="mt-3">Confirm Password<span class=" text-red-500">*</span></p>
          <input type="password" 
                 placeholder="Confirm your password" required
                 class="w-full bg-transparent border-b border-[#ADADAD]  mt-1 px-1 py-2 focus:border-black focus:outline-none">
        </div>
      </div>
      
    </form>
    <div class="grid grid-cols-2 gap-1">
      <div class="flex justify-center">
        <button class="btn btn-active btn-neutral mt-5 w-2/3 px-10" >Register</button>
    </div>
    <div class="flex justify-center">
        <button class="btn btn-active btn-neutral mt-5 w-2/3 px-1" @click="$emit('toggle-sign')">Back to login</button>
    </div>
    </div>
    
  </div>
</template>

<script setup>
defineEmits(['toggle-sign'])
defineProps({
    showSign : {
      type: Boolean, 
      default: false
    }
  })

</script>

<style lang="scss" scoped></style>