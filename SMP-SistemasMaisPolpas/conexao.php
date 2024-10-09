<?php

require_once('config.php');//chama o arquivo config.php

date_default_timezone_set('America/Sao_Paulo'); //seta o horario padrão


try {
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
	echo 'Banco de dados não permite acesso! <p>' .$e;
}

 ?>


