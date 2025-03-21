<?php
$estagio = array("Manutenção","Design","Programação","Serviços de Informática");
   
echo $estagio[3]."<br>";
echo $estagio[0]."<br>";

$size = count($estagio); // tamanho do vetor

for($i=0; $i < $size; $i++) { 
	// echo "index:$i - ".$estagio[$i]."<br>"; 
	echo "index:".$i." - ".$estagio[$i]."<br>"; 
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

$novoVetor = array(); // vetor vazio

$novoVetor[0] = 10; // novo valor do vetor

for ($i=0; $i < 20; $i++) { // add valores no vetor com for 
	$novoVetor[] = $i; 
}

var_dump($novoVetor); 

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
echo $clientes['Ana']['idade'];

var_dump($clientes); // visualizar estrutura da matriz

// interando matriz sem tabela
foreach ($clientes as $nivel01 => $nivel02) {
	echo $nivel01."<br>";

	foreach($nivel02 as $key => $value) {
		echo $key.":".$value."<br>"; 
	}
}
// interando matriz com tabela
echo "<table border='1'>"; 
foreach ($clientes as $nivel01 => $nivel02) {
	echo "<tr> <td colspan='2'> $nivel01 </td> </tr>";
	foreach($nivel02 as $key => $value) {
		echo "<tr> <td> $key </td> <td> $value </td> </tr>"; 
	}
}
echo "</table>"; 

// Crie uma matriz que possa agrupar as informações dos três cursos
// do Amélia, organize esses dados de modo a destacar, nome dos cursos as turmas de cada curso e número alunos de cada turma. 

// Resolução 01 - três dimensões

$turmas = array(
     "Admin" => array("1º" => array("qtd" => 40), 
     	              "2º" => array("qtd" => 41), 
     	              "3º" => array("qtd" => 39),
                    ),
     "Info" => array("1º" => array("qtd" => 40), 
		             "2º" => array("qtd" => 41), 
		             "3º" => array("qtd" => 39),
    ), 
     "Enf" => array("1º" => array("qtd" => 40), 
		            "2º" => array("qtd" => 41), 
		            "3º" => array("qtd" => 39),
    )
); 
echo $turmas["Admin"]["2º"]["qtd"]."<br>"; 

foreach($turmas["Admin"] as $anos => $info) {
	echo $anos."<br>"; 
	foreach ($info as $key => $value) {
		echo $key.":".$value."<br>"; 
	}
}

echo "<hr>"; 

foreach($turmas["Info"] as $anos => $info) {
	echo $anos."<br>"; 
	foreach ($info as $key => $value) {
		echo $key.":".$value."<br>"; 
	}
}

echo "<hr>"; 

foreach($turmas["Enf"] as $anos => $info){
	echo $anos."<br>"; 
	foreach ($info as $key => $value) {
		echo $key.":".$value."<br>"; 
	}
}
echo "<hr>"; 
foreach ($turmas as $cursos => $info) {
	 echo $cursos."<br>"; 
	 foreach($info as $turmas => $alunos){
	 	echo $turmas."<br>"; 
	 	foreach($alunos as $key => $qtd){
	 		echo $key.":".$qtd."<br>"; 
	 	}
	 }
}


// Resolução 02 - Duas dimensões

$turmas = array(
     "Admin" => array("1º" => 41,"2º" => 39,"3º" => 38),
     "Info" => array("1º" => 40,"2º" => 38,"3º" => 37), 
     "Enf" => array("1º" => 41,"2º" => 39,"3º" => 38)
    ); 

echo $turmas["Info"]["3º"]."<br>"; 




// $clientes = array(
//         0 => array(0 => 3, 1 => 5, 2 => 8), 
//         1 => array(8,true,false),
//         2 => array(5,9,10) 
//     );

// $clientes = array(
// 		        array(0 => 3, 1 => 5, 2 => 8), 
// 		        array(8,true,false),
// 		        array(5,9,10) 
//           );