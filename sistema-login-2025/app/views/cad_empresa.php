<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Empresas</title>
<style>
  body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      padding: 40px;
    }

    .form-container {
      max-width: 400px;
      margin: auto;
      background: #fff;
      padding: 25px 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-top: 15px;
      margin-bottom: 5px;
      color: #555;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }


     .topo {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      background-color: #f4f4f4;
      border-bottom: 1px solid #ccc;
      font-family: Arial, sans-serif;
    }
    .topo span {
      font-weight: bold;
    }
    .topo a {
      color: #d00;
      text-decoration: none;
      margin-left: 10px;
    }
    .topo a:hover {
      text-decoration: underline;
    }
    
  </style>
</style>
</head>
<body>
  <div class="form-container">
    <h2>Cadastrar Empresa</h2>
    <form action="/sistema-login-2025/salvar-empresa" method="post">
      <label for="nome">Nome Empresa:</label>
      <input type="text" id="empresa" name="empresa" required>

      <label for="nome">Usuário:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="curso">Tipo:</label>
      <input type="text" id="curso" name="tipo" required>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>
