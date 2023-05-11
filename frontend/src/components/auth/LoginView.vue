<template>
  <div class="login-container">
    <div class="login-card">
      <h2 class="login-title">Bem-vindo ao YouPop</h2>
      <form class="login-form" @submit.prevent="login">
        <input type="email" v-model="email" class="login-input" placeholder="E-mail" required>
        <input type="password" v-model="password" class="login-input" placeholder="Senha" required>
        <div class="login-actions">
          <label class="remember-checkbox">
            <input type="checkbox" v-model="remember"> Lembrar senha
          </label>
          <a href="#" class="forgot-password">Esqueceu a senha?</a>
        </div>
        <button type="submit" class="login-button">Entrar</button>
      </form>
      <div class="login-options">
<button class="login-button2" @click="redirectToCadastroEstabelecimento">Cadastre-se como estabelecimento</button>
   <button class="login-button2" @click="redirectToCadastroEntregador">Cadastre-se como entregador</button>
  </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: '',
      remember: false,
    };
  },
  methods: {
    login() {
      // Implemente a lógica de autenticação aqui
      console.log('Efetuando login...');
    },
  },
};
</script>

<style scoped>
/* Estilos do componente */
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f06432;
}

.login-card {
  width: 300px;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.login-title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #3f51b5;
}

.login-form {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.login-input {
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #f5f5f5;
  color: #333;
}

.login-actions {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 10px;
}

.remember-checkbox {
  font-size: 14px;
}

.forgot-password {
  font-size: 14px;
  color: #999;
  text-decoration: none;
}

.login-button {
  padding: 10px;
   margin: 2px;
  background-color: #3f51b5;
  color: #fff;
  border: none;
  border-radius: 14px;
  cursor: pointer;
}
.login-button2 {
  padding: 10px;
   margin: 2px;
  background-color: #f06432;
  color: #fff;
  border: none;
  border-radius: 14px;
  cursor: pointer;
}

.login-options {
  text-align: center;
}

.signup-link {
  margin-bottom: 10px;
}

.signup-link a {
  color: #3f51b5;
  text-decoration: none;
}
</style>
