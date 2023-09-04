<template>
  <div class="flex flex-col" v-if="showList">
      <div class="tabs mt-16 justify-center">
      <a class="tab tab-lifted text-2xl" :class="{ 'tab-active': showFriendList }" @click="toggleFriends">Friends</a>
      <a class="tab tab-lifted text-2xl" :class="{ 'tab-active': showSuggestions }" @click="toggleSuggestions">Requests</a>
      <hr class="w-full my-1">
    </div>
    <friendList v-if="showFriendList" />
    <SuggestedFriends v-if="showSuggestions" />
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

const toggleFriends = () => {
  showFriendList.value = true
  showSuggestions.value = false
}

const toggleSuggestions = () => {
  showSuggestions.value = true
  showFriendList.value = false

}

</script>

<style></style>