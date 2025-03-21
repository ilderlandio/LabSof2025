<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Formulário </title>
</head>
<body>
    <form method="post" action="valida.php">
    	<p> Funcionário:<input type="text" name="funcionario"> </p>
    	<p> Salário:<input type="number" name="salario"> </p>
    	<p> Filhos:
    		<span> Sim </span>
            <input type="radio" name="filhos" value="true">
            <span> Não </span>
            <input type="radio" name="filhos" value="false">
    	</p>
    	<p> <button type="submit"> Gravar dados </button> </p>
    </form>
</body>
</html>