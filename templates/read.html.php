<div id="s_visual"><img src="img/s4.jpg"></div>


<div id="s_container">

	
    <div id="s_left">
    	
        <div id="s_category">
        	<h1><a href="board.php">게시판</a></h1>
            <ul>
            	<li><a href="board.php">게시판</a></li>
            </ul>
        </div>
        
    </div>
    
    
    <div id="s_center">
    
    	<h1><?=$title?></h1>
        
      	<div id="s_contents">
        
          	<div id="board">
            
            	<ul id="bd1">
                	<li id="buser">작성자</li>
                    <li id="btitle">제목</li>
                    <li id="bdate">작성일</li>
                </ul>
                
                <ul id="bd1_1">
                	<li id="buser"><?=$row['buser']?></li>
                    <li id="btitle"><?=$row['btitle']?></li>
                    <li id="bdate"><?=$row['bdate']?></li>
                </ul>
                
                <ul id="bd3">
                	<li id="bcontents"><?=$row['bcontents']?></li>
                </ul>
                
                <ul id="btn_set">
                	<li><a href="edit.php?bno=<?=$row['bno']?>">수정</a></li>
                    <li><a href="delete.php?bno=<?=$row['bno']?>">삭제</a></li>
                    <li><a href="board.php">목록으로</a></li>
                </ul>
            
            </div>
            
        </div>
        
    </div>
    

</div>