require('./bootstrap');

window.Vue = require('vue').default;

import VueToast from 'vue-toast-notification';
import vClickOutside from "v-click-outside";
import { BootstrapVue } from "bootstrap-vue";
import VueRouter from 'vue-router';

Vue.prototype.$isDev = process.env.MIX_APP_ENV !== "production";
Vue.config.devtools = Vue.prototype.$isDev;
Vue.config.debug = Vue.prototype.$isDev;
Vue.config.silent = !Vue.prototype.$isDev;

Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(vClickOutside);
Vue.use(VueToast);

Vue.component("layout", require("./components/Layouts/main.vue").default);

import Layouts from "./components/Layouts/layouts.mixin";
import router from './components/Router/index';
import i18n from "./components/Locales/i18n";

const app = new Vue({
    el: '#app',
    mixins: [Layouts],
    i18n,
    router,
    data: {
        currentUrl: window.location.origin,
        windowHeight: window.innerHeight,
        windowWidth: window.innerWidth,
    },
    computed: {
        height: function() {
            return this.windowHeight - 170;
        },
        width: function() {
            return this.windowWidth;
        },
        counts: function() {
            return Math.floor((this.height - 175) / 54);
        },
        counts2: function() {
            return Math.floor((this.height - 70) / 54);
        }
    },
});