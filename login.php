<?php

	$title="경주 관광 진흥원 - 로그인";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	
	if(isset($_POST['uid']) && isset($_POST['upw'])){
		
		if(!empty($_POST['uid']) && !empty($_POST['upw'])){
			
			$query = $pdo -> prepare('SELECT * FROM user WHERE uid = :uid');
			$query -> bindValue(':uid', $_POST['uid']);
			$query -> execute();
			
			$row = $query -> fetch();
			
			if($_POST['uid']==$row['uid'] && $_POST['upw']==$row['upw']){
				
				$_SESSION['uid'] = $_POST['uid'];
				$_SESSION['upw'] = $_POST['upw'];
				
				?><script>alert('로그인이 정상적으로 되었습니다.'); location.href='index.php';</script><?php
				
			}else{
				?><script>alert('오류 : 비밀번호를 잘못 입력하셨습니다.'); history.back();</script><?php
			}
			
		}else{
			?><script>alert('오류 : 아이디와 비밀번호를 입력해주세요.'); history.back();</script><?php	
		}
		
	}else{
		
		ob_start();
	
		include __DIR__ . '/templates/login.html.php';
			
		$output = ob_get_clean();
		
	}
	
	include __DIR__ . '/templates/layout.html.php';

?>