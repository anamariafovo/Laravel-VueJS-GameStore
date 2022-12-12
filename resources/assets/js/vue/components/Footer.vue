<template>
    <footer>
        <p class="footer-text"> Copyright &copy; GameStore {{ new Date().getFullYear() }}</p>
    </footer>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>
footer {
    padding: 1rem;
    background: #1a202c;
    text-align: center;
    bottom: 0;
    width: 100%;
    height: 50px;
}
.footer-text {
    color: #e2e8f0;
}
</style>


