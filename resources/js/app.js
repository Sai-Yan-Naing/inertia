import "./bootstrap";
import Vue from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue";

import { Link } from "@inertiajs/inertia-vue";
Vue.component("inertia-link", Link);
createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            render: h => h(App, props)
        }).$mount(el);
    }
});
