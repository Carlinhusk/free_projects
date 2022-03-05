<?php
session_start();
include('verifica_login.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <div class="stext">
    <h1>Olá, <?php echo $_SESSION['login'];?></h2>


    </div> 
<style>
    body, html{
        background: #210334;
    }.stext{
        color: white;
        font-weight: 500;
        font-size: 1em;
        position: relative;
        text-align: center;
    }.home{
        position: relative;
        width: 60px;
        padding: 15px;
        right: 6px;
        background-color: #2f3640;
        top: 155px;
    }button{
        background: none;
        position: relative;
        border-radius: 24px;
        border: 0;
        right: 6px;
    }.sidebar{
        height:100%; /* VAI OCUPAR 100% DA ALTURA DA PAGINA */
        width: 0; /* ALTERA COM JAVASCRIPT */
        position: fixed; /* SERVE PRA MANTER NO LUGAR */
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden; /* DESABILIDA O SCROLL VERTICAL!!!!!!!!!!!!!!! */
        padding-top: 60px;
        transition: 0.5s;
    }.sidebar a{
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        overflow-x: hidden;
        color: #818181;
        display: block;
        transition: 0.3s;
    }.sidebar a:hover{
        color: #f1f1f1;
        /* POSIÇÃO E STYLE DO CLOSE BUTTON (top right corner) */
    }.sidebar .closebtn{
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }.openbtn{
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
        position: relative;
        bottom: 91px;
        transition: 0.3s;
    }.openbtn:hover {
        background-color: #444;
    }#main {
        transition: margin-left .5s; /* If you want a transition effect */
        padding: 20px;
    }@media screen and (max-height: 450px) {
        .sidebar {padding-top: 15px;}
        .sidebar a {font-size: 18px;}
    }.txt1, .txt2{
        color:white;
    }.logout{
        position: relative;
        top: 480px;
        color: #f1f1f1;
    }.mine{
        color: white;
        font-weight: 500;
        font-size: 10em;
        position: relative;
        text-align: center;

    }
</style>

</head>
<body>
<div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Expandir</button>
        <h2 class="txt1">texto texto texto texto texto </h2>
        <p class="txt2">conteudo conteudo conteudo conteudo </p>
    </div>
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="about_us.html">Sobre Nós</a>
        <a href="">Projetos</a>
        <a href="">Equipe</a>
        <a href="">Parceiros</a>
        <a href="">Contato</a>
        <a href="logout.php" class="logout">Sair</a>
    </div>
    <div class="mine">
    </div>


</body>
<script>
    function openNav() {
        document.getElementById("sidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("sidebar").style.overflow = 'hidden';
        document.body.scroll = "no"; // IE
}/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("sidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
}
</script>
</html>