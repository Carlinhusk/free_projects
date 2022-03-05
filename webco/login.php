
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <style>
    body, html{
        background: #210334;
    }</style>
</head>
<body>
    
</body>
</html>

<?php
session_start();
include('conecta.php');


if(empty($_POST['login']) || empty($_POST['pass'])) {
    header('Location: index.html');
    exit();
}

$usuario = mysqli_real_escape_string($conexao , $_POST['login']);
$senha = mysqli_real_escape_string($conexao ,$_POST['pass']);

$query = "select * from signin where user = '{$usuario}' and pass = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
echo $row;

if($row == 1) {
    $_SESSION['login'] = $usuario;
    header('Location: main.php');
    exit();
} else {
    ob_start();
    $_SESSION['nao_autenticadoo'] = true;
    echo "<script> alert('INFORMAÇÕES INCORRETAS'); </script>";
    echo "<script>  window.open('index.html','_self'); </script>";
        
}
?>
