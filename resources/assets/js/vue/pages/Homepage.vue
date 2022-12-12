<template>
    <div class="homepage">
        <img
            src="../../../../../public/assets/images/retro-big.jpg"
            class="homepage-image"
            alt="image not found"
        />
        <h1 class="title">GAMES Store</h1>
        <ul class="category-list">
            <li class="category">Arcade</li>
            <li class="category">RPG</li>
            <li class="category">Puzzle</li>
            <li class="category">Escape</li>
            <li class="category">Adventure</li>
        </ul>
        <router-link :to="{ name: 'games' }" class="games-button">
            SEARCH IN OUR GAME STORE
        </router-link>
    </div>
</template>

<script>
export default {
    name: "Homepage",
};
</script>

<style scoped>
.homepage {
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
.homepage-image {
    height: 500px;
    width: 1200px;
    object-fit: cover;
    filter: brightness(50%);
    box-shadow: 5px 5px 15px 5px #000000;
}

.title {
    position: absolute;
    color: #e2e8f0;
    top: 0%;
    padding: 2rem;
    font-family: "Trebuchet MS", sans-serif;
    font-weight: lighter;
    font-size: 3rem;
}

.category-list {
    position: absolute;
    display: flex;
    width: 60%;
    top: 40%;
    color: #e2e8f0;
    justify-content: space-between;
    align-items: center;
    font-size: 1rem;
    font-family: "Trebuchet MS", sans-serif;
    font-weight: lighter;
}

.category {
    padding: 1rem 2rem;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
}

.games-button {
    position: absolute;
    top: 80%;
    padding: 1rem 2rem;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    background: rgba(226, 232, 240, 0.15);
    color: #ffffff;
    transition: 0.75s;
}

.games-button:hover {
    transform: scale(1.1);
}
</style>
