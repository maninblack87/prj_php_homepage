<?php

	function query($pdo, $sql, $param = []){
		
		$query = $pdo -> prepare($sql);
		$query -> execute($param);
		
		return $query;
		
	}
	
	function findAll($pdo){
		
		$lists = query($pdo, 'SELECT * FROM board ORDER BY bno DESC');
		
		return $lists -> fetchAll();
		
	}
	
	function write($pdo, $buser, $btitle, $bcontents){
		
		$param = [':buser' => $buser, ':btitle' => $btitle, ':bcontents' => $bcontents];
		
		$query = query($pdo, 'INSERT INTO board (buser, btitle, bcontents, bdate) VALUES (:buser, :btitle, :bcontents, '.date("ymd").')', $param);
		
	}
	
	function edit($pdo, $btitle, $bcontents, $bno){
		
		$param = [':btitle' => $btitle, ':bcontents' => $bcontents, ':bno' => $bno];
		
		$query = query($pdo, 'UPDATE board SET btitle=:btitle ,bcontents=:bcontents WHERE bno = :bno', $param);
		
	}
	
	function delete($pdo, $bno){
		
		$param = [':bno' => $bno];
		
		$query = query($pdo, 'DELETE FROM board WHERE bno = :bno', $param);
		
	}

?>