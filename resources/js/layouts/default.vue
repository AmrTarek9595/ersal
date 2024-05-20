<template>
    <div>
        <NavBar />
        <router-view></router-view>
    </div>
</template>

<script>
// components
import NavBar from "../components/layouts/NavBar.vue";

export default {
    components: { NavBar },
};
</script>

<style></style>
