<?php
/*
########################
	Função php que se conecta ao
	banco de dados
########################
*/
	try {
		$dns = "mysql:dbname=chat_php;host=fazendamysql.mysql.database.azure.com";
		$user = "felipe";
		$pass = "P@ssw0rd";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}
	/*
		Importante: Lembre-se sempre de adaptar a conexão quando
		houve uma alteração no banco (adicionar tabelas, remover tabelas,
		alterar nome do banco e etc)
	*/
?>
