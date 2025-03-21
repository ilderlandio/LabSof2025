<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Estudante</title>
</head>
<body>
    <h2>Cadastro de Estudante</h2>
    
    <?php if(isset($_GET['sucesso'])): ?>
        <p style="color: green;">Estudante cadastrado com sucesso!</p>
    <?php endif; ?>

    <form action="router.php?rota=cadastrar" method="POST">
        <label>Matrícula:</label>
        <input type="text" name="matricula" placeholder="Número da matrícula" maxlength="10" required>

        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome do estudante" maxlength="100" required>

        <label>Curso:</label>
        <input type="text" name="curso" placeholder="Curso" maxlength="50" required>

        <label>Ano de Ingresso:</label>
        <input type="number" name="ano_ingresso" placeholder="Ano de Ingresso" min="2000" max="2100" required>

        <br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <br>
    <button onclick="window.location.href='index.php'">Voltar ao Menu</button>
</body>
</html>



