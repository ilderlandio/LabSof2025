<?php
include_once("Conexao.php");

class Crud extends Conexao { 
  private $stmt;  
  public function CadOrientModel($user,$pass,$email,$curso){
    $this->stmt = $this->Conect()->prepare("INSERT INTO orientadores (nome,senha,email,curso) VALUES(:nome,:chave,:eml,:curso)");

    return $this->stmt->execute(array(
            ":nome"=>$user,
            ":chave"=>$pass, 
            ":eml"=>$email,
            ":curso"=>$curso
        ));     
  }

   public function CadEmpresaModel($empresa,$usuario,$pass,$email,$tipo){
    $this->stmt = $this->Conect()->prepare("INSERT INTO orientadores(empresa,usuario,senha,email,tipo) VALUES(:empresa,:usuario,:pass,:email,:tipo)");

    return $this->stmt->execute(array(
            ":empresa"=>$empresa,
            ":usuario"=>$usuario, 
            ":pass"=>$pass,
            ":email"=>$email,
            ":tipo"=>$tipo
        ));     
  }
}
