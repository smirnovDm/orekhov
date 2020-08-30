<template>
 <div>
     <h1>I'm your layout!!</h1>
     <transition
         mode="out-in"
         name="children-router"
     >
         <router-view></router-view>
     </transition>
 </div>

</template>

<script>
export default {
name: "Layout"
}
</script>

<style scoped>

</style>
