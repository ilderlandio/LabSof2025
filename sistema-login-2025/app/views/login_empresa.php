<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica se já está logado e redireciona
if (isset($_SESSION['admin_logado']) && $_SESSION['admin_logado'] === true) {
    header("Location: painel_admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Empresa</title>
</head>
<body>
    <h2>Logar como Empresa</h2>

    <?php if (isset($_GET['erro'])): ?>
        <p style="color:red;">Usuário ou senha inválidos.</p>
    <?php endif; ?>

    <form action="/sistema-login-2025/login-empresa" method="post">
        <label>Usuário:</label>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
