<template>
    <div class="main">
        <Navbar />
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import Navbar from './common/Navbar';

export default {
    name: 'App',
    components: {
        Navbar
    },
    mounted() {
        //
    }
}
</script>
