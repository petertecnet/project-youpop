<template>
  <div>
    <h1>Login</h1>
    <form @submit.prevent="login">
      <input type="email" v-model="email" placeholder="Email">
      <input type="password" v-model="password" placeholder="Senha">
      <button type="submit">Entrar</button>
    </form>
  </div>
</template>

<script>
export default {
  name: 'LoginView', // ou 'LoginForm' ou outro nome composto
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    async login() {
      // Método de login atualizado
    }
  }
};
</script>

<style>
/* Estilos do componente */
</style>
