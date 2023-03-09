<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Paladins </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <style>
            .container{
                height: 100vh;
                position: relative;                
            }
            .elemento{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, 50%);
            }
            #link{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-140%, 750%);
                font-size: 20px
            }
            .erro{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, 1000%);
                color: brown;
            }
            .img{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -110%);
            }
            body{
               background-color: darkcyan; 
            }
            h1{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-family:sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Faça login:</h1>
        <div class="container">
            <div class="elemento">
        <form action="" method="post">
            <label for="email">e-mail:</label><br>
            <input type="email" name="email" id="email" required><br>

            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha" required ><br>

            <input type="submit" value="enviar" name="enviar"><br>
        </form>
            </div>
        </div>
        <div class="img">
        <img src="paladins1.png" alt="paladins" width="500" height="250"/>
        </div>
    </body>
</html>

<?php

if ( isset( $_POST['email'] ) ){
    $email=$_POST['email'];
}
if ( isset( $_POST['senha'] ) ){
    $senha=$_POST['senha'];
}


if($email == "abc@gmail.com" and $senha == "123"){
    echo '<a href="trabalhopag2.php" id="link">proximo</a>';
}else{
    echo "<div class=\"erro\">", " Erro: e-mail ou senha incorreto" ,"</div>";
}
?>