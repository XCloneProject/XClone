import { createRouter, createWebHistory } from 'vue-router'
import HomeView from "@/views/HomeView.vue";
import LoginVue from "@/views/LoginVue.vue";
import {useToast} from 'vue-toastification'
const toast = useToast()
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [

    {
      path: '/',
      name : 'login',
      component: LoginVue,
      meta: {
        requiresAuth: false
      }
    },

    {
      path: '/home',
      name: 'home',
      component: HomeView,
      meta: {
        requiresAuth: true
      }
    }
    

  ]

});

router.beforeEach((to , from , next) => {
  if(to.meta.requiresAuth){
    if(localStorage.getItem('token'))
      next()
    else{
      toast.error('Login first')
      next('/')
    }
  }else
    next()
})

export default router
