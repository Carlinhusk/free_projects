<?php
include("conecta.php");
$u = $_POST["loginn"];
$p = $_POST["pass"];

$resultado = $pdo->prepare("INSERT INTO signin(user,pass) VALUES(:loginn,MD5(:pass))");
$resultado->bindValue(":loginn",$u);
$resultado->bindValue(":pass",$p);
$resultado->execute();
$novo_codigo = $pdo->lastInsertId();
?>

<script>
    alert("USUÁRIO CRIADO COM SUCESSO");
    window.open("index.html","_self");
</script>