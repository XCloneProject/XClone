<template>
    <div>
        <div v-if="route.name === 'home'">
            <div class="flex flex-col gap-5 " v-if="showMessages">
                <div class="flex flex-row  items-center p-5 justify-between">
                    <h1 class="text-3xl font-bold text-left">Messages</h1>
                    <div class="tooltip tooltip-left" data-tip="Write new message">
                        <i class="fa-regular fa-pen-to-square text-xl cursor-pointer"></i>
                    </div>

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
        </div>
        <div class="flex flex-col gap-5 shadow-md h-screen rounded-sm " v-if="route.name === 'inbox'">
            <div class="flex flex-row  items-center p-5 justify-between">
                <h1 class="text-3xl font-bold text-left">Messages</h1>
                <div class="tooltip tooltip-left" data-tip="Write new message">
                    <i class="fa-regular fa-pen-to-square text-xl cursor-pointer"></i>
                </div>
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
    </div>
</template>

<script setup>
import { useRoute } from 'vue-router'

const route = useRoute()
defineProps({
    showMessages: {
        type: Boolean,
        default: false
    }
})
</script>

<style></style>