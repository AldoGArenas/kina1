window.Vue = require('vue');
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)
import VueAwesomeSwiper from 'vue-awesome-swiper'
import 'swiper/dist/css/swiper.css'
Vue.use(VueAwesomeSwiper, /* { default global options } */)
import { BCarousel } from 'bootstrap-vue'
Vue.component('b-carousel', BCarousel)
window.productosc = require('./components/productos-catalogo.vue')

Vue.component("productosc", require("./components/productos-catalogo.vue").default);
const app = new Vue({
    el: '#produc',

});
