
require('./bootstrap');

import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import layout from './components/layout.vue';

import home from './components/home.vue';
import about from './components/about.vue';

const router = createRouter({
    history: createWebHistory(),
  
    routes: [
      {
        path: "/:catchAll(.*)",
      
      },
     
      
      {
        path:"/",
      
      component: home,
      meta: {title: 'home'},

      },
      {
        path: "/about",
      
      component: about,
      meta: {title: 'about'},

      }
       /*
      {
      path: '/details', 
      component: destination_details,
      params: {end:':id',key:':key'}  
    }*/
          ]
  });
  createApp(layout).use(router).mount("#app");
