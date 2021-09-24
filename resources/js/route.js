import Vue from 'vue'
import Router from 'vue-router'


Vue.use(Router)
const about = Vue.component("about", () => import("./components/About"));
const services = Vue.component("services", () => import("./components/Service"));
const contact = Vue.component("contact", ()=>import("./components/Contact"))
const proyect = Vue.component("proyect", () => import("./components/Proyect"));
const home = Vue.component("home", () => import("./components/Inicio"));
export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: home
          },
        {
            path: '/about',
            name: 'About',
            component: about
          },
          {
            path: '/services',
            name: 'Services',
            component: services
          },
          {
            path: '/contact',
            name: 'Contact',
            component: contact
          },
          {
            path: '/proyect',
            name: 'Proyect',
            component: proyect
          },
          { path: '*',  component: home}
    ]
})
