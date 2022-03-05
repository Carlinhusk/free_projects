<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
            body, html{
                background: #210334;
            }.box{
                width: 300px;
                padding: 40px;
                position: relative;
                top:50%;
                left:50%;
                transform:translate(-50%, 30%);
                background:  #2f3640;
                text-align: center;
                border-radius: 12px;
            } .box h2{
                color: white;
                text-transform: uppercase;
                font-weight: 500;
                font-size: 2.5em;
            }.box input[type = "text"], .box input[type = "password"], .box input[type = "submit"]{
                border: 0;
                width: 200px;
                background: none;
                display: block;
                margin: 20px auto;
                border: 2px solid #3498db;
                border-radius: 24px;
                padding: 14px 10px;
                outline: none;
                color: white;
                transition: 0.15s;
                font-size: 1em;
                text-align: center;
            }.box input[type = "text"]:focus, .box input[type = "password"]:focus{
                width: 250px;
                border-color:#575fcf;
            }.box input[type = "submit"]{
                border: 0;
                background: none;
                display: block; 
                margin: 20px auto;
                text-align: center;
                border: 2px solid #3498db;
                padding: 14px 40px;
                outline: none;
                color: white;
                border-radius: 24px;
                transition: 00.25s;
                cursor: pointer;
                font-size: 1em;
            }.box input[type = "submit"]:hover{
                background: #351f69;
        }
        .box input[type = "submit"]::before{
                content: "";
                background: #000;
                margin-top: -20px;
        }
        
        a {
            color: white;
            font-size: 1.5em;
        }
        </style>
</head>
<body>
    <div class="general">
               <form class="box" action="gravar.php" method="post">
                <h2>CADASTRO</h2>
                    <input type="text" autocomplete="off" name="loginn" id="loginn" placeholder="DIGITE SEU LOGIN">
                    <input type="password" autocomplete="off" name="pass" id="pass" placeholder="DIGITE SUA NOVA SENHA">
                    <input type="submit" value="Cadastrar" name="register" onmousedown="clique()">
                    <a href="index.html">Início</a>
                </form>
    </div>
    <script>
        function clique()
        {
            if(loginn.value=="")
            {
                alert("PREENCHA SEU LOGIN")
            }
            if(pass.value=="")
                alert("PREENCHA UMA NOVA SENHA")
        }
    </script>
</body>
</html>