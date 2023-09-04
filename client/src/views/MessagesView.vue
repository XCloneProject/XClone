<template>
    <div class="grid grid-cols-6 ">
        <SideNav class="col-span-1"/>
        <MessagesList class="col-span-2 "/>
        <MessagesMain class="col-span-3 "/>
    </div>
</template>

<script setup>
import SideNav from '../components/SideBar.vue'
import MessagesList from '../components/MessagesList.vue';
import MessagesMain from '../components/MessagesMain.vue'
</script>

<style>

</style>