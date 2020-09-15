<template>
    <component :is="getComponentName"></component>
</template>

<script>
export default {
    name: "booking-form",
    props: {
      stops: {type: Array, default: null},
      type: {type: String, default: 'default'},
      validator: value => ['default', 'special'].some(type => type === value),
    },
    computed: {
        getComponentName(){
            return `form-${this.type}`;
        }
    }
}
</script>

<style scoped>

</style>
