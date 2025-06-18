<?php
$usuario = "suporte";
$senha = "199010";

$hashSenha = password_hash($senha, PASSWORD_DEFAULT);

echo "Usuário: $usuario<br>";
echo "Senha original: $senha<br>";
echo "Hash da senha: $hashSenha";
?>
