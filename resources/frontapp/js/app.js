require('./bootstrap');

import moment from "moment";
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import NavBarComponent from './components/NavBarComponent.vue';
/*import navbar from './shared/components/navbar.vue';
import footerCom from "./shared/components/footer.vue";*/
import Index from "./shared/components/index.vue";
import Vuex from 'vuex';
import storeDefinition from "./store";
import VueTailwind from 'vue-tailwind'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import FatalError from "./shared/components/FatalError";
import Success from "./shared/components/Success";
import Emptycard from "./shared/components/emptycard";
import ValidationErrors from "./shared/components/ValidationErrors";

window.axios = require('axios');
window.Vue = require("vue");
Vue.use(VueRouter);
Vue.use(VueTailwind);
Vue.use(Vuex);
import { CarouselPlugin } from 'bootstrap-vue'
Vue.use(CarouselPlugin)
    // Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
    // Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
import { CardPlugin } from 'bootstrap-vue'
Vue.use(CardPlugin)
Vue.config.devtools = true;
Vue.filter("fromNow", value => moment(value).fromNow());
Vue.component("fatal-error", FatalError);
Vue.component("success", Success);
Vue.component("emptycard", Emptycard);
Vue.component("v-errors", ValidationErrors);
const store = new Vuex.Store(storeDefinition);
let app = new Vue({
    el: '#app',
    store,

    components: {
        NavBarComponent,
        // navbar,
        // footerCom,
        index: Index
    },
    async beforeCreate() {
        this.$store.dispatch("loadStoredState");
        this.$store.dispatch("loadUser");
    },
    router: new VueRouter(routes)
});
