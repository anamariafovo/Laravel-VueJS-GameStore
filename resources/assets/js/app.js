import './bootstrap';

import Vue from 'vue'
import App from './vue/app'
import VueRouter from 'vue-router'
import routes from './vue/routes';

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faGhost } from '@fortawesome/free-solid-svg-icons'
import { faInstagram, faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons'


Vue.use(VueRouter);

library.add( faGhost, faInstagram, faFacebook, faTwitter )

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false

const app = new Vue({
        el: '#app',
        components: {App},
        router: new VueRouter(routes)
    }
)

