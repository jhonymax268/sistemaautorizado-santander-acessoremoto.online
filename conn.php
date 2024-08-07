<?php
session_start();
ob_start();
//error_reporting(0);
date_default_timezone_set('America/Sao_Paulo');

if($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1'):
	$UserIp = '127.0.0.1';
else:
	$UserIp = $_SERVER['REMOTE_ADDR'];
endif;

$data 			= date('d/m/Y');
$hora 			= date('H:i');
$pc_name 		= gethostbyaddr($_SERVER['REMOTE_ADDR']);


?>
