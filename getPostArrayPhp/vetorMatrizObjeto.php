<?php
// Vetor simples em php
$estagio = array("Manutenção","Design","Programação","Serviços de Informática");

echo $estagio[3]."<br>";
echo $estagio[0]."<br>";

$size = count($estagio); // tamanho do vetor

for($i=0; $i < $size; $i++) { 
	// echo "index:$i - ".$estagio[$i]."<br>"; 
	echo "index: ".$i." | valor : ".$estagio[$i]."<br>"; 
}

echo "<hr>"; 

$areasEstagio = array(
	0 => "Manutenção",
	1 => "Design",
	6 => "Programação",
	4 => "Serviços de Informática"
   );

echo $areasEstagio[6]."<br>";

foreach($areasEstagio as $value) {
	echo $value."<br>";
}

echo "<hr>"; 

foreach($areasEstagio as $index => $value) {
	echo "index : $index | valor : $value <br>"; 
}

echo "<hr>"; 

// Array Associativos 
$dadosClientes = array("Nome" => "Maria Clara",
                       "CPF" => "087883456-18",
                       "RG" => "2006089107117",
                       "idade" => 55, 
                       "altura" => 1.75
                      );

echo $dadosClientes['CPF']."<br>"; 
echo $dadosClientes['idade']."<br><br>"; 

foreach($dadosClientes as $value) { // só os valores
	echo "$value <br>"; 
}
echo "<br><br>"; 
foreach($dadosClientes as $key => $value) { // chaves e valores
	echo "$key : $value <br>"; 
}

echo "<br>"; 

echo "<table border=1>"; 
foreach($dadosClientes as $key => $value) { // Usando tabela
	echo "<tr><td> $key </td><td> $value </td></tr>"; 
}
echo "</table>"; 

echo "<hr>"; 
//Arrays multidimensionais / matrizes

$clientes = array(
        "José" => array("idade"=>25,"CPF"=>"087883456-18","RG"=>"2006089107117"), 
        "Maria" => array("idade"=>18,"CPF"=>"057825456-15","RG"=>"2001089097112"),
        "Ana" => array("idade"=>24,"CPF"=>"037825445-30","RG"=>"2019089097118") 
    );

echo $clientes['José']["RG"]."<br>"; 
echo $clientes['Ana']['idade']."<br>";

var_dump($clientes); // visualizar estrutura da matriz
echo "<hr>"; 

// interando matriz sem tabela
foreach ($clientes as $nivel01 => $nivel02) {
	echo $nivel01."<br>";

	foreach($nivel02 as $key => $value) {
		echo $key.":".$value."<br>"; 
	}
}
// // interando matriz com tabela
// echo "<table border='1'>"; 
// foreach ($clientes as $nivel01 => $nivel02) {
// 	echo "<tr> <td colspan='2'> $nivel01 </td> </tr>";
// 	foreach($nivel02 as $key => $value) {
// 		echo "<tr> <td> $key </td> <td> $value </td> </tr>"; 
// 	}
// }
// echo "</table>"; 

echo "<hr>"; 

// Criando um array associativo direto
$produtos = [
    [
        "nome" => "Notebook",
        "preco" => 3500.00
    ],
    [
        "nome" => "Mouse",
        "preco" => 150.00
    ],
    [
        "nome" => "Teclado",
        "preco" => 250.00
    ]
];

var_dump($produtos);

// Percorrendo o array associativo com foreach
foreach ($produtos as $produto) {
    echo "Produto: {$produto['nome']}, Preço: R$ {$produto['preco']}<br>";
}

echo "<hr>"; 

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

// Criando um array de objetos
$produtos = [
    new Produto("Notebook", 3500.00),
    new Produto("Mouse", 150.00),
    new Produto("Teclado", 250.00),
];

// Percorrendo o array com foreach e acessando os atributos como objeto
foreach ($produtos as $produto) {
    echo "Produto: {$produto->nome}, Preço: R$ {$produto->preco}<br>";
}
?>

