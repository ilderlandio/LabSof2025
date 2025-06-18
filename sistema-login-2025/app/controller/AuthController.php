<?php
// app/controllers/AuthController.php

require_once __DIR__ . '/../model/Sessao.php';


class AuthController extends Sessao
{
    public function loginAdmin($nome,$senha)
    {
        $admin = $this->buscarAdminPorNome($nome);
        // var_dump($admin); 

        if ($admin && password_verify($senha, $admin->senha)) {
            session_start();
            $_SESSION['login'] = session_id();
            $_SESSION['usuario_nome'] = $admin->nome; 
            header("Location:/sistema-login-2025/cad-orientador"); 
            exit;
        } else {
        echo "<script>
            alert('Usuário ou senha inválidos para administrador.');
            window.location.href = 'sistema-login-2025/form-login-adm';
        </script>";
        exit;
    }
    }

   

   
    public function logoff()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    session_destroy();
    header("Location: sistema-login-2025/form-login-adm");
    exit;
}
}
