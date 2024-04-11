import { createRouter, createWebHistory } from 'vue-router';
import home from './home.js';
import trangchu from './trangchu.js';



const routes  = [...home, ...trangchu];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
