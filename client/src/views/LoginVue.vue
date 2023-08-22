<template>
  <div class="shadow-xl sm:mx-5 md:mx-10 lg:mx-20 grid sm:grid-cols-1 md:grid-cols-2 my-10 sm:my-16 md:my-24 p-5 rounded-xl bg-gray-300 sm:gap-5 md:gap-10">
    <LoginFormVue :showLogin="showLogin" @toggle-sign="toggleSign"/>
    <SignupFormVue :showSign="showSign" @toggle-sign="toggleSign"/>
    <div>
      <img src="../assets/twitter-new-logo.jpg" class="rounded-xl object-cover min-h-full  ">
    </div>
  </div>
  

</template>

<script setup>
  import {ref} from "vue"
  import LoginFormVue from "@/components/LoginForm.vue";
  import SignupFormVue from "../components/SignupForm.vue";
  const showLogin = ref(true)
  const showSign = ref(false)

  const toggleSign = ()=>{
    showSign.value = !showSign.value
    showLogin.value=!showLogin.value
  }
</script>



<style scoped>

</style>