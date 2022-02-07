require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import NavBarComponent from './components/NavBarComponent.vue';
import Vuex from 'vuex';
import storeDefinition from "./store";
import VueTailwind from 'vue-tailwind'


import FatalError from "./shared/components/FatalError";
import Success from "./shared/components/Success";
import ValidationErrors from "./shared/components/ValidationErrors";

window.axios = require('axios');
window.Vue = require("vue");
Vue.use(VueRouter);
Vue.use(VueTailwind);
Vue.use(Vuex);
Vue.config.devtools = true;

Vue.component("fatal-error", FatalError);
Vue.component("success", Success);
Vue.component("v-errors", ValidationErrors);
const store = new Vuex.Store(storeDefinition);
let app = new Vue({
    el: '#app',
    store,

    components: {
        NavBarComponent
    },

    router: new VueRouter(routes)
});