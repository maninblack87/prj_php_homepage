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
            
            	<form action="delete.php" method="post">
                
                	<input type="hidden" name="bno" value="<?=$row['bno']?>">
                    <input type="hidden" name="buser" value="<?=$row['buser']?>">
                
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
                        <li id="verf_pw">
                        	<p>작성자 본인의 비밀번호를 입력해주시길 바랍니다.</p>
                        	<input type="password" name="verf_pw">
                        </li>
                    </ul>
                    
                    <ul id="btn_set">
                        <li><input type="submit" value="삭제"></li>
                        <li><input type="reset" value="리셋"></li>
                        <li><a href="board.php">목록으로</a></li>
                    </ul>
                
                </form>
            
            </div>
            
        </div>
        
    </div>
    

</div>