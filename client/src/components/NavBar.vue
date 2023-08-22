<template>
  <div class="navbar bg-[#ADADAD] rounded-md px-20">
    
    <div class="justify-start">
        <label class="btn btn-ghost btn-circle">
            <div class="indicator">
                <i class="fa-solid fa-user-group text-2xl"></i>
                <span class="badge badge-sm indicator-item">812</span>
            </div> 
        </label>
    </div>

    <div class="flex-1 justify-center">
        <RouterLink :to="{name: 'home'}">
            <a class="btn btn-ghost normal-case text-xl">XClone </a>
        </RouterLink>
    </div>
  
  <div class="flex-none justify-end flex flex-row gap-7">

    <!-- Message drop down -->
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle">
        <div class="indicator">
            <i class="fa-solid fa-message text-2xl"></i>
            <span class="badge badge-sm indicator-item">9</span>
        </div>
      </label>
      <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
        <div class="card-body">
          <!-- messages list -->
        </div>
      </div>
    </div>

    <!-- Logout button -->
        <label tabindex="0" class="btn btn-ghost bnt-circle avatar">
            <i class="fa-solid fa-arrow-right-from-bracket text-2xl"></i>
        </label>


    <!-- Profile drop down -->
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle ">
    <div class="w-10 rounded-full my-1 text-2xl">YI</div>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Profile</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>

    

  </div>
</div>
</template>

<script setup>
import { RouterLink } from 'vue-router';
</script>

<style>

</style>