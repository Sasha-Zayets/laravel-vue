import Vue from 'vue'
import App from './components/Default'

import Product from './components/Product'

new Vue({
    render: h => h(App)
}).$mount('#app')


new Vue({
    render: h => h(Product)
}).$mount('#product')