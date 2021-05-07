import { createApp } from 'vue';
import common from './common';


require('./bootstrap');

window.Vue = require('vue');


let app=createApp({})
app.component('projects-component', require('./components/front/projects/projects').default);
app.mixin(common);

let contact = createApp({})
contact.component('contact-form', require('./components/front/contactForm/index').default);
contact.mixin(common);


app.mount("#app")
contact.mount("#contact-form")
