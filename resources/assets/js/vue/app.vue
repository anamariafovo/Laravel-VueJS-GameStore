<template>
    <div class="main">
        <app-navbar></app-navbar>
        <div class="view-container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import Navbar from './components/Navbar'

export default {
    name: 'app',
    components: {
        'app-navbar': Navbar,
    }
}
</script>

<style scoped>
.view-container {
    margin: 2rem 4rem;
}
</style>

