<?php
class Model {
    private $connect;
    
    public function __construct() {
        try {
            $this->connect = new PDO("mysql:host=localhost;dbname=identificar_responsavel", 'root', 'mysql2024');
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    public function salvarEstudante($matricula, $nome, $curso, $ano_ingresso) {
        try {
            $stmt = $this->connect->prepare("
                INSERT INTO estudantes (matricula, nome, curso, ano_ingresso) 
                VALUES (:matricula, :nome, :curso, :ano_ingresso)
            ");
            $stmt->bindParam(':matricula', $matricula);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':curso', $curso);
            $stmt->bindParam(':ano_ingresso', $ano_ingresso);
            $stmt->execute();
        } catch (PDOException $e) {
            die("Erro ao salvar estudante: " . $e->getMessage());
        }
    }

    public function buscarEstudantes() {
        try {
            $stmt = $this->connect->prepare("SELECT id, matricula, nome, curso, ano_ingresso FROM estudantes");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erro ao buscar estudantes: " . $e->getMessage());
        }
    }

    // Adicionar função de deletar no Model.php
    public function deletarEstudante($matricula) {
        try {
            $stmt = $this->connect->prepare("DELETE FROM estudantes WHERE matricula = :matricula");
            $stmt->bindParam(':matricula', $matricula, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            die("Erro ao excluir estudante: " . $e->getMessage());
        }
    }

    public function buscarPorMatricula($matricula) {
        try {
            $stmt = $this->connect->prepare("SELECT * FROM estudantes WHERE matricula = :matricula");
            $stmt->bindParam(':matricula', $matricula, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erro ao buscar estudante: " . $e->getMessage());
        }
    }

    public function atualizarEstudante($matricula, $nome, $curso, $ano_ingresso) {
        try {
            $stmt = $this->connect->prepare("
                UPDATE estudantes 
                SET nome = :nome, curso = :curso, ano_ingresso = :ano_ingresso 
                WHERE matricula = :matricula
            ");
            $stmt->bindParam(':matricula', $matricula, PDO::PARAM_INT);
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
            $stmt->bindParam(':curso', $curso, PDO::PARAM_STR);
            $stmt->bindParam(':ano_ingresso', $ano_ingresso, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            die("Erro ao atualizar estudante: " . $e->getMessage());
        }
    }
}

?>

