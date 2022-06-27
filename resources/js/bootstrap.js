// Lodash
import _ from 'lodash';

// Axios
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Vue
import { createApp } from 'vue'
import App from '../vue/App'

window.app = createApp(App)

window.vm = app.mount('#app')
