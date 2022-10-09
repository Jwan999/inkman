require('./bootstrap');

import VueScrollactive from 'vue-scrollactive';

import AOS from 'aos'
import 'aos/dist/aos.css'

Vue.use(AOS);
Vue.use(VueScrollactive);

window.Vue = Vue;
