import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'
import VueAxios from 'vue-axios'

import Review from './components/Reviews/Review.vue'
import ActionWindow from "./components/ActionWindow.vue"
import ModalWindow from "./components/ModalWindow.vue"

import { VMaskDirective } from 'v-slim-mask'

import './animation.js'
import SideMenu from './menues.js';

new SideMenu('#main_side_menue', '.show_menue_button');

const review_app = createApp({
    components:{
        Review,
        ModalWindow,

    },
})

review_app.use(VueAxios, axios)
review_app.mount("#review_app")

const all_modal_win = createApp({
    components:{
        ModalWindow,
        ActionWindow,
    },
})

all_modal_win.use(VueAxios, axios)
all_modal_win.directive('mask', VMaskDirective)
all_modal_win.mount("#all_modal_win")


document.addEventListener("DOMContentLoaded", (event) => {
    new isvek.Bvi();
});

window.addEventListener('load', function () {
    var preloader = document.getElementById('preloader');
    preloader.classList.add('hide');
});
