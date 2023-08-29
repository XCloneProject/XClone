<template>
    <div class="flex flex-row p-5">
        <div class="avatar w-1/6 flex justify-center items-center">
            <div class="w-14 rounded-full ">
                <img src="../assets/Profile.jpg"/>
            </div>
        </div>
        <div class=" w-full">
            <input type="text" 
                placeholder="What's on your mind?" 
                class="input input-lg w-full h-full" 
                @click="onClickCaption=true" 
                @input="handleInput"
                />
        </div>
    </div>
        <div class="flex flex-row items-center justify-between m-2" v-if="onClickCaption">
            <!-- file choices -->
            <div class="flex flex-row gap-3 justify-start">
                <input type="file" class="file-input file-input-ghost w-full max-w-xs" @change="handleImage"/>
            </div>
            <!-- Post button -->
                <button class="btn btn-circle btn-ghost btn-outline " :disabled="!onInputCaption"><i class="fa-solid fa-plus text-xl font-thin"></i></button>
        </div>
</template>

<script setup>
import { ref } from 'vue';
const onClickCaption = ref(false)
const onInputCaption = ref(false)
const image = {
    data: '',
}
const handleInput = (event) =>{
    onInputCaption.value = event.target.value.trim() !== ""
}

const handleImage = (event)=>{
    console.log(event)
}


</script>
