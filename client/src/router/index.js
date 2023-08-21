import { createRouter, createWebHistory } from 'vue-router'
import HomeView from "@/components/HomeView.vue";
import LoginVue from "@/views/LoginVue.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/login',
      name : 'login',
      component: LoginVue
    }

  ]
})

export default router
