<?php

require 'Classes/configBD.php';
require 'Classes/cadastrarClass.php';

$login = $_POST["user"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$bd = new BancoDeDados($host, $dbname,$dbuser, $dbpass);
$bd->Verificar($login,$senha,$email);

?>