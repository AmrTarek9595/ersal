require("./bootstrap");

import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";

// layout
import Layout from "./layouts/default.vue";

// pages
import Home from "./pages/home.vue";
import About from "./pages/about.vue";

// routes
const router = createRouter({
    history: createWebHistory(),

    routes: [
        {
            path: "/:catchAll(.*)",
        },

        {
            path: "/",

            component: Home,
            meta: { title: "home" },
        },
        {
            path: "/about",

            component: About,
            meta: { title: "about" },
        },
    ],
});
createApp(Layout).use(router).mount("#app");
