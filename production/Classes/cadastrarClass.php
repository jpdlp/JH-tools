<?php

    class BancoDeDados {

        private $pdo;
        private $numRows;

        public function __construct($host,$dbname,$dbuser,$dbpass){
            try{
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser,$dbpass);
            }catch(PDOexception $e){
                echo "Falhou".$e->getMessage();
            }
        }
        public function Verificar($login,$senha,$email){
            $sql = "SELECT * FROM usuarios WHERE login = '$login' OR email = '$email'";
            $this->pdo->query($sql);

            // pegar o numero de linhas resultando da consulta feita
            $numRows = $this->pdo->query($sql)->rowCount();

            //verifica se o numero de linhas é maior que 0
            if ($numRows > 0) {
                echo "Usuario já Cadastrado";
            }else {
                $this->pdo->query("INSERT INTO usuarios SET login = '$login', senha = '$senha', email = '$email'");
                echo "Cadastrado com Sucesso";     
                header("Location: login.html#signin");
            }
        }

        public function Logar($login,$senha){
            $s = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$s'";
            $this->pdo->query($sql);

             // pegar o numero de linhas resultando da consulta feita
             $numRows = $this->pdo->query($sql)->rowCount();

            if ($numRows > 0){
                session_start();
                $_SESSION["login"] = $login ;
                header("Location: index.php");

            }else{
              $this->msgError();
            }

        }
        public function msgError(){

            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo "Login ou Senha incorretos";
            echo "</div>";
        }

        public function qtdUsers(){
            $sql = "SELECT * FROM usuarios";
            $numRows = $this->pdo->query($sql)->rowCount();

            echo $numRows;
        }

        public function exibirUsers(){
            $sql = "SELECT * FROM usuarios";
            $users = $this->pdo->query($sql)->fetchAll();

            foreach ($users as $user) {
                echo '<td>'.$user['id'].'</td>';                
                echo '<td>'.$user['login'].'</td>';
                echo '<td>'.$user['email'].'</td>';
                echo '<td>'.$user['senha'].'</td>';
                echo '<td>Editar - Excluir</td><tr>';
                
                
            }
        }

    }

?>