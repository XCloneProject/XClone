<template>
  <div class="grid grid-cols-2 min-h-screen">
    <div>
    </div>
    <div class="col-span-1">
      <div class="flex flex-col gap-8 items-center">
        <div class=" justify-center mt-5">
          <RouterLink :to="{ name: 'home' }">
            <a class="btn btn-ghost normal-case text-2xl font-bold">XClone</a>
          </RouterLink>
        </div>
        <!-- Home -->
        <div>
          <label class="btn btn-ghost btn-circle">
            <i class="fa-solid fa-house text-2xl"></i>
          </label>
        </div>
        <!-- Friends -->
        <div>
          <label class="btn btn-ghost btn-circle">
            <div class="indicator">
              <i class="fa-solid fa-user-group text-2xl"></i>
              
              <span class="badge badge-sm indicator-item">812</span>
            </div>
          </label>
        </div>
        <!-- Messages -->
        <div>
          <label tabindex="0" class="btn btn-ghost btn-circle">
            <div class="indicator">
              <i class="fa-solid fa-message text-2xl"></i>
              <span class="badge badge-sm indicator-item">9</span>
            </div>
          </label>
        </div>
        <!-- Logout button -->
        <div>
          <label class="btn btn-ghost bnt-circle avatar">
            <i class="fa-solid fa-arrow-right-from-bracket text-2xl"></i>
          </label>
        </div>
        <!-- Profile drop down -->
        <div>
          <label tabindex="0" class="btn btn-ghost btn-circle ">
            <div class="w-10 rounded-full my-1 text-2xl">YI</div>
          </label>
        </div>
        <!-- Add post -->
        <div>
          <label class="btn btn-neutral">
            <p>Add Post</p>
          </label>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { RouterLink } from 'vue-router';
import { useDark, useToggle } from "@vueuse/core"

const isDark = useDark()
console.log(isDark.value)
const toggleDark = useToggle(isDark)
</script>

<style></style>