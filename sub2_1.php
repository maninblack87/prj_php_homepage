<?php

	$title="경주 관광 진흥원 - 경주 여행";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	
	ob_start();
	
	include __DIR__ . '/templates/sub2_1.html.php';
		
	$output = ob_get_clean();
	
	include __DIR__ . '/templates/layout.html.php';

?>