<template>
  <div class="flex flex-col " v-if="showList">
    <div class="flex flex-row justify-between text-2xl py-8 p-12 cursor-pointer">
      <h1 class="  font-medium hover:border-b" :class="{'border-b':showFriendList}" @click="toggleFriends">Friend List</h1>
      <h1 class=" font-medium hover:border-b" :class="{'border-b':showSuggestions}" @click="toggleSuggestions">Suggestions</h1>
    </div>
    <hr class="w-1/2 mx-auto">
    <friendList v-if="showFriendList"/>
    <SuggestedFriends v-if="showSuggestions"/>
  </div>
</template>

<script setup>
import { ref } from "vue"
import friendList from "./friendList.vue"
import SuggestedFriends from "./SuggestedFriends.vue"

defineProps({
  showList: {
    type: Boolean,
    default: true
  },
})

const showFriendList = ref(true)
const showSuggestions = ref(false)

const toggleFriends = ()=>{
  showFriendList.value = true
  showSuggestions.value = false
}

const toggleSuggestions = ()=>{
  showSuggestions.value = true
  showFriendList.value = false
  
}

</script>

<style></style>