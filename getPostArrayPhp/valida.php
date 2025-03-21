<?php
$funcionario = $_POST['funcionario'];
$salario = $_POST['salario']; 
$filhos = $_POST['filhos']; 

 echo 'Nome: '.$funcionario.' - Salário: '.$salario.' - Filhos: '.$filhos.'<br>'; 

echo "Nome: {$funcionario} - Salário: {$salario} - Filhos:{$filhos} <br>"; 