window.Vue = require('vue');

Vue.component('biography', require('./components/Biography.vue'));
Vue.component('nav-menu', require('./components/NavMenu.vue'));
Vue.component('nav-bio', require('./components/NavBio.vue'));

const app = new Vue({
    el: '#app',
});

// init Packery
var $grid = $('.grid').packery({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
    gutter: '.gutter-sizer'
});
// layout Packery after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.packery();
});