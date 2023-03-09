<?php

function select_usuarios() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM usuarios");
	$sth->execute();
	return $sth->fetchAll();
}

function insert_usu($nome_usu, $email_usu, $idade_usu, $senha_usu, $fone_usu, $nick_usu) {
	global $conn;
	$sth = $conn->prepare("insert into usuarios (usu_nome, usu_email, usu_idade, usu_senha, usu_fone, usu_nick) values ('$nome_usu', '$email_usu', '$idade_usu', '$senha_usu', '$fone_usu', '$nick_usu')");
	$sth->execute();
}

function deletar_usu($cod_usu) {
	global $conn;
	$sth = $conn->prepare("delete from usuarios where pk_usu_cod = $cod_usu");
	$sth->execute();
}

?>
