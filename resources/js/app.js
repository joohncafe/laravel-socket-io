require('./bootstrap');

import Vue from 'vue';

import VueToastify from 'vue-toastify'

Vue.use(VueToastify);


new Vue({
    render (h) {
      return h('div', this.hi)
    }
})
