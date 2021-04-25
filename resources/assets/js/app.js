
require('./bootstrap');

window.Vue = require('vue');

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)



Vue.component('message-conversation', require('./components/MessageConversationComponent.vue'));
Vue.component('ContactComponent', require('./components/ContactComponent.vue'));
Vue.component('contact-list', require('./components/ContactListComponent.vue'));
Vue.component('ActiveConversation', require('./components/ActiveConversationComponent.vue'));

const app = new Vue({
    el: '#app',
    methods:{
        logout(){
            document.getElementById('logout-form').submit();
        }
    }
});
