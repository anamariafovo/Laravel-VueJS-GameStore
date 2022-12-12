<template>
    <div class="games-container">
        <div v-for="(game, index) in games" :key="index">
            <card :game="game" v-on:itemChanged="$emit('itemChanged')"></card>
        </div>
    </div>
</template>

<script>
import GameCard from "./GameCard";

export default {
    name: "GameContainer",
    props: ['games'],
    components: {
        'card': GameCard
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
