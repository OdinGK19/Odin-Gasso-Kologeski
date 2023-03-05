
<?php

require_once("banco.php");
require_once("tabelas.php");



if(isset($_POST['nome']) and isset($_POST['email']) and isset($_POST['idade']) and isset($_POST['senha']) and isset($_POST['fone']) and isset($_POST['nick']) ){                 

$nome_usu = $_POST['nome'];
$email_usu = $_POST['email'];
$idade_usu = $_POST['idade'];
$senha_usu = $_POST['senha'];
$fone_usu = $_POST['fone'];
$nick_usu = $_POST['nick'];

}


insert_usu($nome_usu, $email_usu, $idade_usu, $senha_usu, $fone_usu, $nick_usu);

header("Location: lista_usu.php");
?>