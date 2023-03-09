<?php
require_once("banco.php");
require_once("tabelas.php");

$cod = $_GET['pk_usu_cod'];
deletar_usu($cod);

header("Location: lista_usu.php");

?>