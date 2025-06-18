<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['login'])) {
    echo "<script>
              alert('Você não fez login como administrador.');
              window.location.href = '/sistema-login-2025/form-login-adm';
          </script>";
    //header("Location: /sistema-login-2025/form-login-adm");
    //exit;
}

// Recupera o nome do usuário logado
$nomeUsuario = isset($_SESSION['usuario_nome']) ? $_SESSION['usuario_nome'] : 'Desconhecido';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Orientador</title>
  <link rel="stylesheet" href="app/views/assets/style.css">
</head>
<body>
   <div class="topo">
    <span>Logado como: <?= htmlspecialchars($nomeUsuario) ?></span>
    <a href="/sistema-login-2025/logout">Sair</a>
  </div>

  <div class="form-container">
    <h2>Cadastrar Orientador</h2>
    <form action="/sistema-login-2025/salvar-orientador" method="post">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="curso">Curso:</label>
      <input type="text" id="curso" name="curso" required>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>

