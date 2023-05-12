<template>
  <div class="login-container">
    <div class="login-card">
      <img src="https://app.tanayoupop.com.br/assets/img/logos/logo.png?v=1677859874mFhur" alt="Logo do YouPop" class="logo">
      <h2 class="login-title">Seja bem-vindo !</h2>
      <form class="login-form" @submit.prevent="login">
        <input type="email" v-model="email" class="login-input" placeholder="E-mail" required>
        <input type="password" v-model="password" class="login-input" placeholder="Senha" required>
        <div class="login-actions">
          <label class="remember-checkbox">
            <input type="checkbox" v-model="remember"> Lembrar senha
          </label>
        </div>
        <button type="submit" class="login-button">Entrar</button>
        <button class="login-button" @click="redirectToCadastroEntregador">Esqueceu a senha?</button>
      </form>
      <div class="login-options">
        <button class="login-button2" @click="redirectToCadastroEstabelecimento">Cadastre-se como estabelecimento</button>
        <button class="login-button2" @click="redirectToCadastroEntregador">Cadastre-se como entregador</button>
      </div>
    </div>

    <!-- Modal -->
    <modal v-if="message" :message="message" @close="message = ''"></modal>
  </div>
</template>
<script>
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
  data() {
    return {
      email: '',
      password: '',
      remember: false,
      message: '', // Propriedade para armazenar a mensagem da API
    };
  },
  methods: {
    async login() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/login', {
          email: this.email,
          password: this.password,
        });

        // Processar a resposta da API de acordo com a lógica do seu aplicativo
        this.message = response.data.message; // Atribuir a mensagem da API à propriedade "message"
        console.log('Login realizado com sucesso!', response.data);

        // Exibir a mensagem em um modal de sucesso
        Swal.fire({
          icon: 'success',
          title: 'Sucesso!',
          text: response.data.message,
        });
      } catch (error) {
        // Lidar com erros de autenticação
        if (error.response && error.response.data && error.response.data.message) {
          this.message = error.response.data.message; // Atribuir a mensagem de erro da API à propriedade "message"
        } else {
          this.message = 'Erro ao fazer login. Por favor, tente novamente.'; // Mensagem de erro genérica
        }
        console.error('Erro ao fazer login:', error);

        // Exibir a mensagem em um modal de erro
        Swal.fire({
          icon: 'error',
          title: 'Erro!',
          text: this.message,
        });
      }
    },
    redirectToCadastroEstabelecimento() {
      // Lógica para redirecionar para a página de cadastro de estabelecimento
    },
    redirectToCadastroEntregador() {
      // Lógica para redirecionar para a página de cadastro de entregador
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

.logo {
  width: 200px;
  height: auto;
  margin-bottom: 20px;
}

.login-card {
  width: 400px;
  padding: 10px;
  background-color: #dadada;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.login-title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #3f51b5;
  text-align: center;
}

.login-form {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.login-input {
  width: 300px;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 10px;
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
  background-color: #773a88;
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

/* Estilos do modal */
.modal {
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 999;
}

.modal-content {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  text-align: center;
  position: relative;
}

.close {
  position: absolute;
  top: 10px;
  right: 10px;
  color: #999;
  cursor: pointer;
}
</style>
