<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Menu do Sistema</title>
  <link rel="stylesheet" href="app/views/assets/style.css">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body, html {
      height: 100%;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .menu-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .menu {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .menu a {
      text-decoration: none;
    }

    .menu-button {
      background-color: #3498db;
      color: white;
      padding: 15px 30px;
      text-align: center;
      border-radius: 8px;
      font-size: 18px;
      transition: background-color 0.3s ease;
      cursor: pointer;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .menu-button:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="menu-container">
    <div class="menu">
      <a href="sistema-login-2025/form-login-adm">
        <div class="menu-button">Login Administrador</div>
      </a>
      <a href="sistema-login-2025/form-login-orient">
        <div class="menu-button">Login Orientador</div>
      </a>
      <a href="sistema-login-2025/cad_empresa">
        <div class="menu-button">Cadastro de Empresas</div>
      </a>
      <a href="sistema-login-2025/login-empresa">
        <div class="menu-button">Login Empresa</div>
      </a>
    </div>
  </div>
</body>
</html>
