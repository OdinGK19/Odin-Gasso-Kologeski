<?php
require_once("banco.php");
require_once("tabelas.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Paladins </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <style>
             .con{
                height: 100vh;
                position: relative;                
            }
            .ele{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-110%, -50%);
            }
            .ele2{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(40%, -50%);
            }
            input{
                margin-bottom: 10px;
            }
            body{
               background-color: darkcyan; 
            }
            h1{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-45%, -500%);
                font-family:sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Preencha com seus dados:</h1>
        <div class="con">
            <div class="ele">
        <form action="cadastra_usu.php" method="POST">

        <label for="nome">Nome completo:</label><br>
        <input type="text" name="nome"><br>

        <label for="email">e-mail:</label><br>
            <input type="email" name="email" id="email"><br>

        <label for="idade">Idade:</label><br>
        <input type="number" name="idade" ><br>

        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha" ><br>

        </div>
        <div class="ele2">
            <label for="fone">Número de celuar: </label><br>
            <input type="tel" name="fone" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="51 99999-9999" ><br>


            <label for="nick">Apelido em jogo: </label><br>
            <input type="text" name="nick"><br>

            <label for="plataforma">Selecione sua plataforma:</label><br>
            <select name="plataforma" required>
                <?php

                $query = $conn->query("SELECT id, plat_nome FROM plataformas ORDER BY plat_nome ASC");
                $registros = $query->fetchAll(PDO::FETCH_ASSOC);

                foreach($registros as $option){
                 ?>
                 <option value ="<?php echo $option ['plat_nome']?>"><?php echo $option['plat_nome']?></option>
                   <?php 
                }
                ?>
                </select><br>


            <br><input type="submit" name="cadastrar">
        </form>
        </div>
        </div>
        <img src="paladins2.png" alt="cristal" width="500" height="250"/>
    </body>
</html>