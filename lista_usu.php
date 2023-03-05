<?php
require_once("banco.php");
require_once("tabelas.php");
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Lista de usuários</title>
    <link rel="stylesheet" href="style_lista.css">
</head>
<body>
	<h3>Lista de usuários <a href="trabalhopag2.php">(Adicionar mais usuários)</a></h3>
	<?php
	$select_u = select_usuarios();
	echo "<table border=2>\n";
	foreach($select_u as $usus) {
		echo "<td>" . $usus['usu_nome'] . "</td>";
		echo "<td>" . $usus['usu_email'] . "</td>";
		echo "<td>" . $usus['usu_idade'] . "</td>";
		echo "<td>" . $usus['usu_senha'] . "</td>";
		echo "<td>" . $usus['usu_fone'] . "</td>";
        echo "<td>" . $usus['usu_nick'] . "</td>";
    
		echo "</tr>\n";
	}		
	echo "</table>\n";
	?>

</body>
</html>