import axios from 'axios';

export async function isAuthenticated() {
  try {
    const response = await axios.get('http://127.0.0.1:8000/api/check-authentication');

    // Verificar se o usuário está autenticado
    return response.data.authenticated;
  } catch (error) {
    console.error('Erro ao verificar autenticação:', error);
    return false;
  }
}

export default {
  // Restante do código do componente Vue
};
