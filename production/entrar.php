<?php
require 'Classes/configBD.php';
require 'Classes/cadastrarClass.php';

$login = $_POST["user"];
$senha = $_POST["senha"];

$bd = new BancoDeDados($host, $dbname,$dbuser, $dbpass);
$bd->Logar($login,$senha);

?>