<template>
    <div class="login-container">
      <h1>Login</h1>
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" v-model="email" required>
        </div>
        <div class="form-group">
          <label for="password">Senha</label>
          <input type="password" id="password" v-model="password" required>
        </div>
        <div class="form-group">
          <button type="submit">Entrar</button>
        </div>
      </form>
      <div class="forgot-password">
        <a href="#">Esqueceu a senha?</a>
      </div>
      <div class="register-links">
        <a href="#">Cadastro de Estabelecimento</a>
        <a href="#">Cadastro de Entregador</a>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        email: '',
        password: ''
      };
    },
    methods: {
      submitForm() {
        // Lógica para autenticar o usuário com email e senha
        // Você pode chamar uma função ou emitir um evento para o componente pai
        // para tratar a autenticação e a navegação para outras telas
        // Exemplo: this.$emit('login', { email: this.email, password: this.password });
      }
    }
  }
  </script>
  
  <style scoped>
  .login-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
  }
  
  button[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
  }
  
  .forgot-password,
  .register-links {
    text-align: center;
    margin-top: 20px;
  }
  
  a {
    margin: 0 10px;
    text-decoration: underline;
    color: #333;
  }
  </style>
  