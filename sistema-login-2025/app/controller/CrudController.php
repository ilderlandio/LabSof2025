<?php

require_once __DIR__ . '/../model/Crud.php';

class CrudController extends Crud
{
    public function CadOrient($nome,$senha,$email,$curso){
        $senha = password_hash($senha,PASSWORD_DEFAULT); 
       $result =  $this->CadOrientModel($nome, $senha, $email, $curso);
       if($result){
        echo "<script>
            alert('Usuário cadastrado.');
            window.location.href = '/cad-orientador';
        </script>";
       }
    }

    public function CadEmpresa($empresa,$usuario,$pass,$email,$tipo){
       $senha = password_hash($pass,PASSWORD_DEFAULT); 
       $result =  $this->CadEmpresaModel($empresa,$usuario,$pass,$email,$tipo);
       if($result){
        echo "<script>
            alert('Usuário cadastrado.');
            window.location.href = '/login-empresa';
        </script>";
       }
    }
}
