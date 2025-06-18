<?php 
session_start();
define('BASE_PATH', dirname(__DIR__));

include_once "Router.php";

include_once BASE_PATH . "/app/controller/AuthController.php"; 
include_once BASE_PATH . "/app/controller/CrudController.php"; 

// Usa o roteador
$router = new Router();
$controller = new AuthController(); 
$crudController = new CrudController(); 

$router->get('/home', function () {
    require BASE_PATH . '/app/views/menu_sistema.php';
});

$router->post('/login-admin', function ()  use ($controller){ // Acessar página de cadastro de orientadores 
    $nome = $_POST["usuario"];
    $senha = $_POST["senha"];
    $controller->loginAdmin($nome,$senha); 
});

$router->post('/salvar-orientador', function ()  use ($crudController){ // Cadastrar um orientador
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $curso = $_POST["curso"]; 
    $crudController->CadOrient($nome,$senha,$email,$curso); 
});

$router->get('/form-login-adm', function () {
   // require dirname(__DIR__) . '/app/views/login_admin.php';
   require BASE_PATH . '/app/views/login_admin.php';
});

$router->get('/cad-orientador', function () {
    require BASE_PATH . '/app/views/cad_orientador.php';
});

$router->get('/cad_empresa', function () {
    require BASE_PATH . '/app/views/cad_empresa.php';
});


$router->get('/login-empresa', function () {
    require BASE_PATH . '/app/views/login_empresa.php';
});

$router->get('/form-login-orient', function () {
    require BASE_PATH . '/app/views/login_orientador.php';
});

$router->get('/logout', function () use ($controller) {
    $controller->logoff(); 
});

$router->run();



