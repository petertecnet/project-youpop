import { createRouter, createWebHistory } from 'vue-router';
import LoginView from '@/pages/auth/LoginView.vue';
import DashboardView from '@/pages/DashboardView.vue';
import { isAuthenticated } from '../services/auth';

const routes = [
  {
    path: '/',
    name: 'Home',
    component: LoginView,
  },
  {
    path: '/login',
    name: 'Login',
    component: LoginView
  },
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: DashboardView,
    meta: { requiresAuth: true }, // Requer autenticação
    beforeEnter: (to, from, next) => {
      if (isAuthenticated()) {
        next(); // Permite o acesso à rota da Dashboard se o usuário estiver autenticado
      } else {
        next('/login'); // Redireciona para a página de login se o usuário não estiver autenticado
      }
    },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
