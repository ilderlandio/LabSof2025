<?php 
// importa a classe que realiza a conexão com o banco de dados
include_once("Conexao.php"); 

class Sessao extends Conexao{ // Herda a classe Conexao que faz a conexão com o banco de dados

    private $stmt; // atributo para ser usado nas consultas ao bd
    
   public function buscarAdminPorNome($nome) {
    $sql = "SELECT * FROM administradores WHERE nome = :nome LIMIT 1";
    $this->stmt = $this->Conect()->prepare($sql);
    $this->stmt->bindParam(':nome', $nome);
    $this->stmt->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
}
}
?>