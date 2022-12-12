import Homepage from '../pages/Homepage.vue'
import Games from '../pages/Games.vue'
import Shop from '../pages/ShoppingCart.vue'

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Homepage
        },
        {
            path: '/games',
            name: 'games',
            component: Games
        },
        {
            path: '/shop',
            name: 'shop',
            component: Shop
        }
    ]
}
