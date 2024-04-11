import './bootstrap';
import { createApp } from 'vue';
import router from '../router/index.js';
import 'bootstrap/dist/css/bootstrap-grid.min.css';
import 'bootstrap/dist/css/bootstrap-utilities.min.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import axios from 'axios';
window.axios = axios;
import App from './App.vue';

const app = createApp(App);
app.use(router);
app.mount("#app");




