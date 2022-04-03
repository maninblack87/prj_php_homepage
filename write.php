<?php

	$title="경주 관광 진흥원 - 게시판 글 쓰기";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	include __DIR__ . '/includes/dbfunction.php';
	
	if(isset($_POST['btitle']) && isset($_POST['bcontents'])){
		
		if(!empty($_POST['btitle']) && !empty($_POST['bcontents'])){
			
			if(isset($_SESSION['uid'])){
				
				write($pdo, $_SESSION['uid'], $_POST['btitle'], $_POST['bcontents']);
				
				?><script>alert('글이 정상적으로 작성되었습니다.'); location.href='board.php';</script><?php
				
			}else{
				?><script>alert('오류 : 로그인후에 작성해주세요.'); history.back();</script><?php	
			}
			
		}else{
			?><script>alert('오류 : 제목과 내용을 빠짐없이 입력해주세요.'); history.back();</script><?php	
		}
		
	}else{
	
		ob_start();
		
		include __DIR__ . '/templates/write.html.php';
			
		$output = ob_get_clean();
	
	}
	
	include __DIR__ . '/templates/layout.html.php';

?>