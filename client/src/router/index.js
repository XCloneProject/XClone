import { createRouter, createWebHistory } from 'vue-router'
import HomeView from "@/views/HomeView.vue";
import LoginVue from "@/views/LoginVue.vue";
import { useToast } from 'vue-toastification'
import store from '../store'
const toast = useToast()

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [

    {
      path: '/',
      name: 'login',
      component: LoginVue,
      meta: {
        title: 'XClone | Login ',
        requiresAuth: false
      }
    },

    {
      path: '/home',
      name: 'home',
      component: HomeView,
      meta: {
        title: 'XClone | Home',
        requiresAuth: true
      }
    },

    // {
    //   path:'/dashboard',
    //   name: 'dashboard',
    //   component: adminView,
    //   meta:{
    //     adminAccess: true
    //   }
    // }


  ]

});

router.beforeEach((to, from, next) => {
  if (to.meta.requiresAuth) {
    if (localStorage.getItem('token')) {
      document.title = `${to.meta.title}`;
      next();
    }
    else {
      toast.error('Login first');
      next('/');
    }
  } else {
    document.title = to.meta.title;
    next();
  }


})

export default router
