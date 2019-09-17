import Vue from 'vue'
import App from './components/Default'

import Product from './components/Product'

if (document.getElementById('app')) {
    new Vue({
        render: h => h(App)
    }).$mount('#app')
}

if (document.getElementById('product')) {
    new Vue({
        render: h => h(Product)
    }).$mount('#product')
}
