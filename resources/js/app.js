import { createApp } from 'vue';
import common from './common';


require('./bootstrap');

window.Vue = require('vue').default;


let app=createApp({})
app.component('projects-component', require('./components/front/projects/projects').default);
app.component('pagination', require('laravel-vue-pagination'));
app.mixin(common);


app.mount("#app")
