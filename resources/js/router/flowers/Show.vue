<template>
    <div class="container">
        <modal v-if="showModal"></modal>

        <button @click="showModal = true">show modal</button>
    </div>
</template>

<script>

export default {
    name: "Show",
}
</script>

<style scoped>

</style>
