<?php

	$title="경주 관광 진흥원 - 게시판 글";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	include __DIR__ . '/includes/dbfunction.php';
	
	$query = $pdo -> prepare('SELECT * FROM board WHERE bno = :bno');
	$query -> bindValue(':bno', $_GET['bno']);
	$query -> execute();
	
	$row = $query -> fetch();
	
	ob_start();
	
	include __DIR__ . '/templates/read.html.php';
		
	$output = ob_get_clean();
	
	include __DIR__ . '/templates/layout.html.php';

?>