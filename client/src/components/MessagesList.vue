<template>
<div class="flex flex-col gap-5 " v-if="showMessages">
        <div class="flex justify-center py-5">
            <h1 class="text-3xl font-bold text-center">Messages</h1>
        </div>
        <div class="flex flex-row justify-between items-center py-2 px-3">
            <!-- Profile preview -->
            <div class="flex flex-row items-center gap-5 ">
                <div class="avatar cursor-pointer lg:tooltip" data-tip="View Profile">
                    <div class="w-14 rounded-full">
                        <img src="../assets/Profile.jpg" />
                    </div>
                </div>
                <div class="flex flex-col gap3">
                    <p class="text-xl">Kiliminiwa</p>
                    <p class="text-sm text-gray-400">Message preview</p>
                </div>
            </div>
            <div>
                <p class="text-gray-400">1h ago</p>
            </div>
        </div>
        <hr class="w-1/2 mx-auto">
    </div>
</template>

<script setup>
defineProps({
    showMessages:{
        type:Boolean,
        default:false
    }
})
</script>

<style>

</style>