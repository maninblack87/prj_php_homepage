<?php

	$title="경주 관광 진흥원 - 로그아웃";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	
	$session = session_destroy();
	
	if($session){	
		?><script>alert('로그아웃이 정상적으로 되었습니다.'); location.href='index.php';</script><?php
	}else{
		?><script>alert('오류 : 관리자에게 문의바랍니다.'); history.back();</script><?php
	}

?>