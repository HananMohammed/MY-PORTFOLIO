import { createApp } from 'vue';
import common from './common';


require('./bootstrap');

window.Vue = require('vue');


let app=createApp({})
app.component('pagination', require('laravel-vue-pagination').default);
app.component('projects-component', require('./components/front/projects/projects').default);
app.mixin(common);


app.mount("#app")
