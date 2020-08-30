<template>
 <div>
     <article class="message" v-show="isVisible">
         <div class="message-header">
             {{title}}
             <button class="delete" @click="isVisible = false" aria-label="delete"></button>
         </div>
         <div class="message-body">
             {{body}}
         </div>
     </article>
 </div>
</template>

<script>
export default {
    name: "message",
    data(){
        return{
            isVisible: true,
        }
    },
    props: {
        title: {type: null, default: null},
        body: {type: null, default: null},
    },
}
</script>

<style scoped>

</style>
