<?php
echo "<h2> Método de requisição GET </h2>"; 

if(empty($_GET)){
    echo "Nenhum valor passado pelo método GET"; 
}else{
    $idadePessoa = $_GET['idade'];
    $salarioPessoa = $_GET['salario'];

    // echo $_GET['idade']; // mesmo efeito
    echo "Idade: {$idadePessoa}<br>";
    //echo "<br>";   
    echo "Salário: {$salarioPessoa}<br>"; 
}



