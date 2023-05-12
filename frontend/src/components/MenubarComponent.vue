<template>
    <div class="menu-bar">
      <div class="logo">
        <img src="../assets/logo.png" alt="Logo">
      </div>
      <ul class="menu-items">
        <li>Dashboard</li>
        <li>Lojas</li>
        <li>Itens e Menu</li>
        <li>Pedidos</li>
        <li>Ganhos</li>
        <li>Mídia</li>
        <li>Relatórios</li>
        <li>Rastreamento</li>
        <li>Configurações da Impressora</li>
      </ul>
      <div class="user-profile">
      <div class="user-info">
        <span class="username">Nome do Usuário</span>
        <i class="arrow-down"></i>
      </div>
      <ul class="dropdown-menu">
        <li>Meu perfil</li>
        <li>Logout</li>
      </ul>
    </div>
    </div>
  </template>
  
  <style>
  .menu-bar {
    background-color: purple;
    height: 60px;
    display: flex;
    align-items: center;
    padding: 0 20px;
  }
  
  .logo {
    margin-right: 20px;
  }
  
  .logo img {
    height: 40px;
    width: auto;
  }
  
  .menu-items {
    display: flex;
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  
  .menu-items li {
    margin-right: 20px;
    color: white;
    font-weight: bold;
    cursor: pointer;
  }
  
.user-profile {
  position: relative;
  margin-left: auto;
}

.user-info {
  display: flex;
  align-items: center;
  cursor: pointer;
  color: white;
}

.user-info .username {
  margin-right: 10px;
}

.user-info .arrow-down {
  border: solid white;
  border-width: 0 2px 2px 0;
  display: inline-block;
  padding: 3px;
  transform: rotate(45deg);
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  right: 0;
  background-color: purple;
  padding: 10px;
  display: none;
}

.user-profile:hover .dropdown-menu {
  display: block;
}

.dropdown-menu li {
  color: white;
  cursor: pointer;
  padding: 5px 0;
}
  </style>
  