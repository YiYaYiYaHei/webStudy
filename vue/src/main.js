// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import './assets/css/swiper.min.css'
import axios from 'axios'
import VueAwesomeSwiper from 'vue-awesome-swiper'
import store from './chooseCite'

Vue.config.productionTip = false

Vue.prototype.$http= axios

Vue.use(VueAwesomeSwiper)
 

/* eslint-disable no-new */
new Vue({
  el: '#app',
  store,
  router,
  components: { App },
  template: '<App/>'
})
