<template>
  <div class="flex flex-col gap-5 ">
        <div class="flex justify-center py-5">
            <h1 class="text-3xl font-medium text-center">People you may know</h1>
        </div>
        <div class="flex flex-row justify-between items-center py-2 px-4">
            <!-- Profile preview -->
            <div class="flex flex-row items-center gap-5 ">
                <div class="avatar cursor-pointer lg:tooltip" data-tip="View Profile">
                    <div class="w-14 rounded-full">
                        <img src="../assets/Profile.jpg" />
                    </div>
                </div>
                <p class="text-xl">Youssef Harrak</p>
            </div>
            <!-- Actions -->
            <div class="flex flex-row gap-5 cursor-pointer" @click="toggleAdd">
                <div class="lg:tooltip" data-tip="Add" v-if="showAdd">
                    <i class="fa-solid fa-user-plus text-xl"></i>
                </div>
                <div class="lg:tooltip" data-tip="Cancel request" v-if="showCancel">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
const showAdd = ref(true)
const showCancel = ref(false)
const toggleAdd = ()=>{

    showAdd.value = !showAdd.value
    showCancel.value = !showCancel.value
}
</script>

<style>

</style>