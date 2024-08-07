<?php
ob_start();
date_default_timezone_set('America/Sao_Paulo');

$UrlFake = 'br/'; // SEM BARRA NO FINAL e sempre com o http ou https!!!
	header("Location: {$UrlFake}");

?>
