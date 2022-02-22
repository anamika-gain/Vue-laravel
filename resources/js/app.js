

require('./bootstrap');
import VueRouter from "vue-router";
import router from "./routes";
import Vue from 'vue';
import Index from "./Index";

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    mode: 'history',
    router,
    components: {
        index: Index
    },


});



