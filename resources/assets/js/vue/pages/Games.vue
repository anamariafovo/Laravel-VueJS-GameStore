<template>
    <div>
        <div class="search-input">
            <input v-model="search" type="text" class="search-bar" placeholder="Search game here">
        </div>
        <games-container :games="games" v-on:itemChanged="getGames()"></games-container>
    </div>
</template>

<script>
import GamesContainer from "../components/GamesContainer";

export default {
    name: "Games",
    components: {
        'games-container': GamesContainer,
    },
    data() {
        return {
            games: [],
            search: ''
        }
    },
    mounted() {
        this.getGames();
    },
    methods: {
        getGames() {
            axios.get('api/games', {params: {search: this.search}})
                .then(response => {
                    if(response.status == 200) {
                        const games = response.data;
                        this.games = games.data;
                    }
                })
        },
    },
    watch: {
        search() {
            this.getGames();
        }
    }
}
</script>

<style scoped>
.search-input {
    margin-bottom: 2rem;
}

.search-bar {
    border: none;
    padding: 1rem;
    height: 2rem;
    width: 20rem;
    border-radius: 5px;
}
</style>
