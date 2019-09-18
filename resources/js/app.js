import Vue from 'vue'
import App from './components/Default'

import Product from './components/Product'

Vue.component('component-product', App)
Vue.component('component-list', Product)


const app = new Vue({
    el: '#app'
})
