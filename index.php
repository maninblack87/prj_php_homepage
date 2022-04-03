<?php

	$title="경주 관광 진흥원 홈페이지";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	
	ob_start();
	
	include __DIR__ . '/templates/main.html.php';
		
	$output = ob_get_clean();
	
	include __DIR__ . '/templates/layout.html.php';

?>