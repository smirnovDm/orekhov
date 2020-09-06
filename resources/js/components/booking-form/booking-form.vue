<template>
    <component :is="getComponentName"></component>
</template>

<script>
import FormDefault from './form-default';
export default {
    name: "booking-form",
    components: {
      'form-default': FormDefault,
    },
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
