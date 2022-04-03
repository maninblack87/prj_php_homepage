<?php

	$title="경주 관광 진흥원 - 게시판 글 수정";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	include __DIR__ . '/includes/dbfunction.php';
	
	if(isset($_POST['btitle']) && isset($_POST['bcontents'])){
		
		if(!empty($_POST['btitle']) && !empty($_POST['bcontents'])){
			
			if($_SESSION['uid'] == $_POST['buser']){
				
				edit($pdo, $_POST['btitle'], $_POST['bcontents'], $_POST['bno']);
				
				?><script>alert('글이 정상적으로 수정되었습니다.'); location.href='board.php';</script><?php
				
			}else{
				?><script>alert('오류 : 본인의 글만 수정이 가능합니다.'); history.back();</script><?php	
			}
			
		}else{
			?><script>alert('오류 : 제목과 내용을 빠짐없이 입력해주세요.'); history.back();</script><?php	
		}
		
	}else{
		
		$query = $pdo -> prepare('SELECT * FROM board WHERE bno = :bno');
		$query -> bindValue(':bno', $_GET['bno']);
		$query -> execute();
		
		$row = $query -> fetch();
	
		ob_start();
		
		include __DIR__ . '/templates/edit.html.php';
			
		$output = ob_get_clean();
	
	}
	
	include __DIR__ . '/templates/layout.html.php';

?>