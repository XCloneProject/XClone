<template>
   <div class="flex flex-col gap-5 ">
    <hr class="w-1/2 mx-auto">
        <div class="flex justify-center py-5">
            <h1 class="text-3xl font-medium text-center">Friend requests</h1>
        </div>
        <div class="flex flex-row justify-between items-center py-2 px-4">
            <!-- Profile preview -->
            <div class="flex flex-row items-center gap-5 ">
                <div class="avatar cursor-pointer lg:tooltip" data-tip="View Profile">
                    <div class="w-14 rounded-full">
                        <img src="../assets/Profile.jpg" />
                    </div>
                </div>
                <p class="text-xl">Wael Al-aouad</p>
            </div>
            <!-- Actions -->
            <div class="flex flex-row gap-5 cursor-pointer">
                <div class="lg:tooltip" data-tip="Accept">
                    <i class="fa-solid fa-check text-xl"></i>
                </div>
                <div class="lg:tooltip" data-tip="Reject">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style>

</style>