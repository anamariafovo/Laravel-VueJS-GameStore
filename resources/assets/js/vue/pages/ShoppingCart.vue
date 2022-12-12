<template>
    <div>
        <div v-if="gamesInCart.length > 0" class="games-container">
            <games-container :games="gamesInCart" v-on:itemChanged="getGamesInCart()"></games-container>
        </div>
        <div v-else>
            <p>No games in your shopping list yet.</p>
        </div>
    </div>
</template>

<script>
import GamesContainer from "../components/GamesContainer";

export default {
    name: "ShoppingCart",
    components: {
        'games-container': GamesContainer,
    },
    data() {
        return {
            gamesInCart: [],
        }
    },
    mounted() {
        this.getGamesInCart();
    },
    methods: {
        getGamesInCart() {
            axios.get('api/games')
                .then(response => {
                    if(response.status == 200) {
                        const games = response.data;
                        this.gamesInCart = games.data.filter(game => game.added_to_cart == true)
                    }
                })
        },
    }
}
</script>

<style scoped>
.games-container {
    margin-bottom: 4rem;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    column-gap: 4rem;
    row-gap: 4rem;
}
</style>
