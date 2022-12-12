<template>
    <div class="card">
        <a href="#">
            <img
                class="card-image"
                :src="getImagePath()"
                alt="image not found"
            />
        </a>
        <div class="card-body">
            <h4 class="card-title">{{ game.name }}</h4>
            <h5>${{ game.price }}</h5>
            <button @click="changeAddedToCartStatus()" class="card-button">
                {{
                    game.added_to_cart === "1"
                        ? "Remove from cart"
                        : "Add to cart"
                }}
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "GameCard",
    props: ["game"],
    methods: {
        changeAddedToCartStatus() {
            axios
                .put("api/game/" + this.game.id, {
                    game: this.game,
                })
                .then((response) => {
                    if (response.status == 200) {
                        this.$emit("itemChanged");
                    }
                });
        },
        getImagePath() {
            return require("../../../../../public/assets/images/" +
                this.game.image);
        },
    },
};
</script>

<style scoped>
.card {
    border: 1px solid #1a202c;
    border-radius: 2px;
    height: 350px;
    width: 250px;
    background: #1a202c;
    box-shadow: 3px 8px 12px 3px rgba(0, 0, 0, 0.2),
        3px 6px 20px 3px rgba(0, 0, 0, 0.19);
    overflow: hidden;
    transition: 0.75s;
}
.card:hover {
    box-shadow: 3px 8px 12px 3px rgba(0, 0, 0, 0.5),
        3px 6px 20px 3px rgba(0, 0, 0, 0.7);
}
.card-image {
    object-fit: cover;
    width: 100%;
    height: 70%;
    opacity: 90%;
}
.card-body {
    height: 30%;
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    color: #e2e8f0;
}

.card-button {
    border: none;
    background: #1a202c;
    color: #e2e8f0;
    border: 1px solid #e2e8f0;
    border-radius: 2px;
    padding: 0.2rem;
    cursor: pointer;
    transition: 0.75s;
}

.card-button:hover {
    background: #ccaedc;
    border: 1px solid #ccaedc;
    color: #1a202c;
}
</style>
