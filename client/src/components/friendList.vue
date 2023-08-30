<template>
    <div class="flex flex-col gap-5 " v-if="showList">
        <div class="flex justify-center py-5">
            <h1 class="text-3xl font-bold text-center">Friend List</h1>
        </div>
        <div class="flex flex-row justify-between items-center py-2 px-3">
            <!-- Profile preview -->
            <div class="flex flex-row items-center gap-5 ">
                <div class="avatar cursor-pointer lg:tooltip" data-tip="View Profile">
                    <div class="w-14 rounded-full">
                        <img src="../assets/Profile.jpg" />
                    </div>
                </div>
                <p class="text-xl">Ayman Benamri </p>
            </div>
            <!-- Actions -->
            <div class="flex flex-row gap-5 cursor-pointer">
                <div class="lg:tooltip" data-tip="Remove friend">
                    <i class="fa-solid fa-user-minus text-xl "></i>
                </div>
                <div class="lg:tooltip" data-tip="Message">
                    <i class="fa-solid fa-message text-xl font-thin"></i>
                </div>
                <div class="lg:tooltip" data-tip="Block">
                    <i class="fa-solid fa-ban text-xl "></i>
                </div>
            </div>
        </div>
        <hr class="w-1/2 mx-auto">
        <div class="flex flex-row justify-between items-center py-2 px-3">
            <!-- Profile preview -->
            <div class="flex flex-row items-center gap-5 ">
                <div class="avatar cursor-pointer lg:tooltip" data-tip="View Profile">
                    <div class="w-14 rounded-full">
                        <img src="../assets/Profile.jpg" />
                    </div>
                </div>
                <p class="text-xl">Youssef Harrak </p>
            </div>
            <!-- Actions -->
            <div class="flex flex-row gap-5 cursor-pointer">
                <div class="lg:tooltip" data-tip="Remove friend">
                    <i class="fa-solid fa-user-minus text-xl "></i>
                </div>
                <div class="lg:tooltip" data-tip="Message">
                    <i class="fa-solid fa-message text-xl font-thin"></i>
                </div>
                <div class="lg:tooltip" data-tip="Block">
                    <i class="fa-solid fa-ban text-xl "></i>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    showList:{
        type : Boolean,
        default:true 
    }
})
</script>

<style></style>