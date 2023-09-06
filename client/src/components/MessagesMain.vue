<template>
   <div class="flex flex-col">
    <div class="flex flex-row justify-between shadow-sm p-1">
        <div class="flex flex-row gap-4">
            <div class="avatar cursor-pointer">
                <div class="w-14 rounded-full">
                    <img src="../assets/Profile.jpg" />
                </div>
            </div>
            <div class="py-3">
                <p class="text-xl">Yassine Idr</p>
            </div>
        </div>
    </div>
    <div class="flex-1 overflow-y-auto p-3">
        <div class="chat chat-end my-1">
            <div class="chat-image avatar">
                <div class="w-10 rounded-full">
                    <img src="../assets/Profile.jpg" />
                </div>
            </div>
            <div class="chat-bubble">Slm cv</div>
        </div>
        <div class="chat chat-start">
            <div class="chat-image avatar">
                <div class="w-10 rounded-full">
                    <img src="../assets/Profile.jpg" />
                </div>
            </div>
            <div class="chat-bubble">Oui hmd</div>
        </div>
    </div>
    <div class="p-3 flex flex-row ">
        <input type="text" 
                placeholder="Type here" 
                class="input input-bordered rounded-2xl w-full" 
                @input="handleInput"
                v-model="message.content"  
                />

        <button :disabled="!onMessageInput" 
                class=" btn btn-circle btn-ghost btn-outline cursor-pointer mx-3 " >
                <i class="fa-regular fa-paper-plane text-2xl" ></i>
        </button>
    </div>
        
</div>

</template>

<script setup>
import { ref } from 'vue';
const onMessageInput = ref(false)

const message = {
    content:''
}
//this function is to prevent users from sneding empty messages
const handleInput = (event)=>{
    onMessageInput.value = event.target.value.trim() !== ""
}
</script>

<style></style>