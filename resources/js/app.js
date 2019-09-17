import Vue from 'vue'
import App from './components/Default'

import Product from './components/Product'

window.Vue = require('vue');


Vue.component('component-product', require('./components/Product.vue').default);
Vue.component('component-list', require('./components/List.vue').default);


const app = new Vue({
    el: '#app'
});
