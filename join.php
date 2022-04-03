<?php

	$title="경주 관광 진흥원 - 회원가입";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	
	if(isset($_POST['uid']) && isset($_POST['upw'])){
		
		if(!empty($_POST['uid']) && !empty($_POST['upw'])){
		
			if($_POST['conf_pw']==$_POST['upw']){
				
				$query = $pdo -> prepare('INSERT INTO user (uid, upw) VALUES (:uid, :upw)');
				$query -> bindValue(':uid', $_POST['uid']);
				$query -> bindValue(':upw', $_POST['upw']);
				$query -> execute();
				
				?><script>alert('회원가입이 정상적으로 되었습니다.'); location.href='index.php';</script><?php
				
			}else{
				?><script>alert('오류 : 비밀번호 재확인을 잘못 입력하셨습니다.'); history.back();</script><?php
			}
			
		}else{
			?><script>alert('오류 : 아이디와 비밀번호를 입력해주세요.'); history.back();</script><?php	
		}
		
	}else{
		
		ob_start();
	
		include __DIR__ . '/templates/join.html.php';
			
		$output = ob_get_clean();
		
	}
	
	include __DIR__ . '/templates/layout.html.php';

?>