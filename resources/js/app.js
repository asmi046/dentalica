import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'
import VueAxios from 'vue-axios'

import Review from './components/Reviews/Review.vue'

import './animation.js'

const review_app = createApp({
    components:{
        Review,
    },
})

review_app.use(VueAxios, axios)
review_app.mount("#review_app")

document.addEventListener("DOMContentLoaded", (event) => {
    new isvek.Bvi();
});

window.addEventListener('load', function () {
    var preloader = document.getElementById('preloader');
    preloader.classList.add('hide');
});
