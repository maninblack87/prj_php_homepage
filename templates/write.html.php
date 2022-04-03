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
            
            	<form action="write.php" method="post">
                
                    <ul id="write1">
                        <li id="wr1">제목</li>
                        <li id="wr2"><input type="text" name="btitle"></li>
                    </ul>
                    
                    <ul id="write2">
                        <li id="wr1">내용</li>
                        <li id="wr2"><textarea name="bcontents"></textarea></li>
                    </ul>
                    
                    <ul id="btn_set">
                        <li><input type="submit" value="작성"></li>
                        <li><input type="reset" value="리셋"></li>
                        <li><a href="board.php">목록으로</a></li>
                    </ul>
                
                </form>
            
            </div>
            
        </div>
        
    </div>
    

</div>