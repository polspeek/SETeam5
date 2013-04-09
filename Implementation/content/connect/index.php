<?php
try
{
	$pdo = new PDO('mysql:host=utepSEteam5.db.9688189.hostedresource.com;dbname=utepSEteam5', 'utepSEteam5', 'a5s6s0f!Nc94');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
	$output = 'Unable to connect to the database server.' . $e->getMessage();
	include 'output.html.php';
	exit();
}

$output = 'Database connection established.';
include 'output.html.php';

?>