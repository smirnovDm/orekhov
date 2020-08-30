<template>
    <div>
        <TheHeader/>
        <router-view></router-view>
        <TheFooter/>
    </div>
</template>

<script>
    export default {
        name: "Layout"
    }
</script>
