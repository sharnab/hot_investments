require('./bootstrap');
window.Vue = require('vue')

// import router from './router'
// Vue.use(VueRouter);

import jQuery from 'jquery';
import $ from 'jquery';

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';

import axios from 'axios';

import VueLazyload from 'vue-lazyload';
import Vuetify from 'vuetify/lib';

import VModal from 'vue-js-modal';

import * as VueGoogleMaps from 'vue2-google-maps';

// import pagination from 'laravel-vue-pagination';

// Vue.use(VueAxios, axios);

// import common from './common'
// Vue.mixin(common)

import App from './App.vue';

Vue.use(VueAxios, axios);
Vue.use(VueRouter);
Vue.use(VueLazyload);
Vue.use(VModal);

Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyBrsRbcMCwCrRURPbjGpzcF4EMjHYVVDr4',
        libraries: 'places'
    }
})

import PropertyView from './components/pages/property-view.vue';
import PropertyForm from './components/pages/property-info-form.vue';
import SellerEntries from './components/pages/property-view.vue';
import PropertyInfo from './components/pages/property-info.vue';
import ProfileForm from './components/pages/profile-form.vue';

import Menubar from './components/menubar.vue';
import PropertySearch from './components/search-property.vue';
import PriceRangeSlider from './components/PriceRangeSlider.vue';
import AreaRangeSlider from './components/AreaRangeSlider.vue';
import Fileuploader from './components/FileUploader.vue';

Vue.component('pagination', require('laravel-vue-pagination'))
Vue.component('chat-component', require('./components/ChatComponent.vue'));
Vue.component('user-component', require('./components/UserComponent.vue'));
Vue.component('chat-messages-component', require('./components/ChatMessageComponent.vue'));
Vue.component('chat-form-component', require('./components/ChatFormComponent.vue'));

Vue.component('message-component', require('./components/MessageComponent.vue'));

const routes = [
  {
      name: 'home',
      path: '/',
      component: PropertyView
  },
  {
      name: 'property-form',
      path: '/property/create',
      component: PropertyForm
  },
  {
      name: 'property-form',
      path: '/property/edit/:id',
      component: PropertyForm
  },
  {
      name: 'seller-dashboard',
      path: '/seller',
      component: SellerEntries
  },
  {
      name: 'property-info',
      path: '/property/show/:id',
      component: PropertyInfo
  },
  {
      name: 'profile-form',
      path: '/profile/edit/:id',
      component: ProfileForm
  },
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');

// Vue.component('menubar', require('./components/menubar.vue'))
// Vue.component('property-view', require('./components/pages/property-view.vue'))
// Vue.component('search-property', require('./components/search-property.vue'))
// Vue.component('PriceRangeSlider', require('./components/PriceRangeSlider.vue'))

// const router = new VueRouter({ mode: 'history'});
//
// const app = new Vue({
//     el: '#app',
//     router
// });
