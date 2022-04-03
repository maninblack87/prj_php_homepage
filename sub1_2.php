<?php

	$title="경주 관광 진흥원 - 관광 안내소";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	
	ob_start();
	
	include __DIR__ . '/templates/sub1_2.html.php';
		
	$output = ob_get_clean();
	
	include __DIR__ . '/templates/layout.html.php';

?>