import Vue from 'vue';
import App from './components/App.vue';

export default new Vue({
    // instead of relying on the root-element data object
    // one should use a shared store for global data
    // consider using Vuex for this
    data: {
        people: [],
    },
    render: h => h(App),
});
