<template>
  <div class="dashboard-view">
    <MenubarComponent /> <!-- Incluindo o componente MenubarComponent -->

    <div class="content">
      <!-- Conteúdo da dashboard -->
    </div>
  </div>
</template>

<script>
import MenubarComponent from '@/components/MenubarComponent.vue'; // Importando o componente MenubarComponent

export default {
  components: {
    MenubarComponent, // Registrando o componente MenubarComponent
  },
};
</script>

<style scoped>
/* Estilos para o DashboardView.vue */
</style>
