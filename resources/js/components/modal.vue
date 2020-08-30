<template>
    <div>
        <div class="modal" :class="getActive">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Modal title</p>
                    <button class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    some content
                </section>
                <footer class="modal-card-foot">
                    <button class="button is-success">Save changes</button>
                    <button class="button">Cancel</button>
                </footer>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "modal",
    data(){
        return{
            showModal: true,
        }
    },
    methods: {
      getActive(){
          return 'is-active';
      }
    },
}
</script>

<style scoped>

</style>
