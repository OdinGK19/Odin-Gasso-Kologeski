<?php
require_once("banco.php");
require_once("tabelas.php");

//inserção

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Paladins </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <style>
             body{
               background-color: darkcyan; 
            }
            h1{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-45%, -500%);
                font-family:sans-serif;
                font-size: 40px;
            }
            .nome{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-45%, -400%);
                font-family:sans-serif;
                font-size: 20px;
        }
        .c{
                height: 100vh;
                position: relative;                
            }
            .nick{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-60%, -150%);
                font-family:sans-serif;
                font-size: 20px;
        }
        .id{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-145%, -50%);
                font-family:sans-serif;
                font-size: 20px;
        }
        .email{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-57%, 50%);
                font-family:sans-serif;
                font-size: 20px;
        }

        .plat{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-75%, 250%);
                font-family:sans-serif;
                font-size: 20px;
        }
        .fone{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-41%, 350%);
                font-family:sans-serif;
                font-size: 20px;
        }
        .senha{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, 450%);
                font-family:sans-serif;
                font-size: 20px;
        }
            

        </style>
    </head>
    <body>
        <div clas="c">
            <div class="e">
    </div>
    </div>
        <h1>Seus dados:</h1>
    </body>
</html>
<?php

echo "<div class=\"nome\">". "Nome: " .$_POST['nome'] . "</div>";
echo "<div class=\"email\">". "<br>Email: " .$_POST['email'] . "</div>";
echo "<div class=\"senha\">". "<br>Senha: " .$_POST['senha'] . "</div>";
echo "<div class=\"nick\">". "<br>Apelido em jogo: " .$_POST['nick'] . "</div>";
echo "<div class=\"id\">". "<br>Idade: " .$_POST['idade'] . "</div>";
echo "<div class=\"plat\">". "<br>Plataforma: " .$_POST['plataforma'] . "</div>";
echo "<div class=\"fone\">". "<br>Número de celular: " .$_POST['fone'] . "</div>";
?>
