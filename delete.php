<?php

	$title="경주 관광 진흥원 - 게시판 글 삭제";
	
	session_start();
	
	include __DIR__ . '/includes/dbconnection.php';
	include __DIR__ . '/includes/dbfunction.php';
	
	if(isset($_POST['verf_pw'])){
		
		if($_SESSION['uid']==$_POST['buser'] && $_SESSION['upw']==$_POST['verf_pw']){
			
			delete($pdo, $_POST['bno']);
			
			?><script>alert('글이 정상적으로 삭제되었습니다.'); location.href='board.php';</script><?php
			
		}else{
			?><script>alert('오류 : 작성자 본인의 글만 삭제 가능합니다.'); history.back();</script><?php		
		}
		
	}else{
		
		$query = $pdo -> prepare('SELECT * FROM board WHERE bno = :bno');
		$query -> bindValue(':bno', $_GET['bno']);
		$query -> execute();
		
		$row = $query -> fetch();
	
		ob_start();
		
		include __DIR__ . '/templates/delete.html.php';
			
		$output = ob_get_clean();
	
	}
	
	include __DIR__ . '/templates/layout.html.php';

?>