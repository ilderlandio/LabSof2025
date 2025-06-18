<?php 
class Conexao{
    protected $PDO;
    private $config;  
    private $banco = "sistema_login_2025";
    private $host = "localhost";
    private $user = "root";
    private $senha = "mysql2024"; 
    private $charset = "utf8";
    
    protected function Conect(){
        // junta o banco, host e conjunto de caracteres em uma única variável
        $this->config = "mysql:dbname=$this->banco;"; 
        $this->config .=  "host=$this->host;"; 
        $this->config .= "charset=$this->charset;";

        try{
        $this->PDO = new PDO($this->config,$this->user,$this->senha);
        $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        }catch(PDOException $erro) {
            //echo "Erro ao conectar com a base de dados:".$erro->getMessage(); 
          throw new Exception("Erro de conexão do BD".$erro->getMessage(),$erro->getCode());
        } 

     return $this->PDO; // retorna a variável da conexão

    } // end Conect
} // end Class

?>