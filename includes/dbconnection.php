<?php

	$pdo = new PDO('mysql:host=localhost; dbname=test5; charset=utf8;','jeon5','1234');
	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>