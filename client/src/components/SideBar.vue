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
        <div class="lg:tooltip" data-tip="Home">
          <RouterLink :to="{name:'home'}">
            <label class="btn btn-ghost btn-circle">
              <i class="fa-solid fa-house text-2xl"></i>
            </label>
          </RouterLink>
        </div>
        <!-- Friends -->
        <div class="lg:tooltip" data-tip="Friends">
            <label class="btn btn-ghost btn-circle">
              <div class="indicator">
                <i class="fa-solid fa-user-group text-2xl"></i>
                <span class="badge badge-sm indicator-item">812</span>
              </div>
            </label>
        </div>
        <!-- Messages -->
        <div class="lg:tooltip" data-tip="Messages">
            <label tabindex="0" class="btn btn-ghost btn-circle">
              <div class="indicator">
                <i class="fa-solid fa-message text-2xl"></i>
                <span class="badge badge-sm indicator-item">9</span>
              </div>
            </label>
        </div>
        <!-- Logout button -->
        <div @click="handleLogout()" class="lg:tooltip" data-tip="Logout">
          <label class="btn btn-ghost bnt-circle avatar">
            <i class="fa-solid fa-arrow-right-from-bracket text-2xl"></i>
          </label>
        </div>
        <!-- Profile drop down -->
        <div class="lg:tooltip" data-tip="Profile">
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
import axios from 'axios'
import store from '../store';

const isDark = useDark()
console.log(isDark.value)
const toggleDark = useToggle(isDark)

const handleLogout = async () => {
  await store.dispatch('logout')
}
</script>

<style></style>