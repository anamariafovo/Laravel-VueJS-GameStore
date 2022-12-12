<template>
    <nav>
        <div class="nav-left">
            <div class="logo-container">
                <router-link :to="{name: 'home'}" class="nav-link logo">
                    <font-awesome-icon icon="fa-solid fa-ghost"/>
                </router-link>
            </div>
            <div class="links">
                <router-link :to="{name: 'games'}" class="nav-link">
                    GAMES
                </router-link>
                <router-link :to="{name: 'shop'}" class="nav-link">
                    SHOPPING CART
                </router-link>
            </div>
        </div>
        <div class="nav-right">
            <div class="social-links">
                <a href="#" class="social-link">
                    <font-awesome-icon icon="fa-brands fa-instagram"/>
                </a>
                <a href="#" class="social-link">
                    <font-awesome-icon icon="fa-brands fa-facebook"/>
                </a>
                <a href="#" class="social-link">
                    <font-awesome-icon icon="fa-brands fa-twitter"/>
                </a>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'Navbar',
}
</script>

<style scoped>
nav {
    padding: 2rem 1rem;
    background: #1a202c;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-left {
    display: flex;
    align-items: center;
}

.logo {
    font-size: 2rem;
}

.links {
    display: flex;
    justify-content: space-between;
}

.nav-link,
.social-link {
    color: #e2e8f0;
    transition: 0.75s;
    padding: 0.25rem 0.75rem;
}

.social-link {
    font-size: 1.2rem;
}

.nav-link:hover,
.social-link:hover {
    color: #ffffff;
}
</style>
