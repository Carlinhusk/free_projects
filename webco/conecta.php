<?php
try{
    $pdo = new PDO("mysql:dbname=webco;gost=localhost","root","vertrigo");
}catch(PDOException $erro){
    echo "Erro na conexão: " . $erro->getMessage();
}

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'vertrigo');
define('DB', 'webco');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('ERRO NA CONEXÃO');


?>