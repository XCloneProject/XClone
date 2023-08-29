<template>
  <div class="flex-1 justify-center items-center z-10 bg-black bg-opacity-80 rounded-md flex-col gap-8">
    <h1 class="text-3xl">Add a post</h1>
    <form @submit.prevent="">
        <div class="relative">
          <input type="text" placeholder=""
                id="caption"
               class="w-full peer placeholder-transparent bg-transparent border-b border-[#ADADAD] my-3 px-1 focus:border-black focus:outline-none">
          <label for="caption" class="absolute left-0 -top-3.5 hover:cursor-text  peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-1.5 peer-focus:-top-3.5 peer-focus:text-black peer-focus:text-sm transition-all ">Add caption</label>
        </div>
        
    </form>

  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>