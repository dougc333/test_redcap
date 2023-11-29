// import Vue from 'vue'
// import App from './App.vue'

// Vue.config.productionTip = false

// if(process.env.NODE_ENV!=='production') {
//   new Vue({
//     render: h => h(App),
//   }).$mount('#app')
// }

// // expose the constuctor
// /**
// * @param element can be a css selector or an HTML element
// */
// window.DataMartVue = function(params={}) {
//   params.render = h => h(App)
//   return new Vue(params)
// }

import VueFactory from './../../vue-factory/src/index.js'
import App from './App.vue'

const factory = new VueFactory()
factory.render(App, '#app')