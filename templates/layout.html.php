<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?=$title?></title>
<link rel="stylesheet" href="css/test5.css">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/test5.js"></script>
</head>

<body>
    
    
    <!--헤더-->
    <div id="header">
        
        
        <!--계정관리-->
        <div id="hd1">
        
        	<div id="container">
            
            	<div id="account">
					<?php if(isset($_SESSION['uid'])){ ?>
                    <div id="acc1"><?=$_SESSION['uid']?>님 환영합니다!</div>
                    <div id="acc2"><a class="a_wh" href="logout.php">로그아웃</a></div>
                    <?php }else{ ?>
                    <div id="acc1"><a class="a_wh" href="join.php">회원가입</a></div>
                    <div id="acc2"><a class="a_wh" href="login.php">로그인</a></div>
					<?php } ?>
                </div>
            
            </div>
        
        </div>
    
    	
        <!--로고, 카테고리-->
        <div id="hd2">
        
        	<div id="container">
            
            	<div id="logo"><a href="index.php"><img src="img/logo.png" alt="logo" title="경주 관광 진흥원 로고"></a></div>
        
                <nav>
                
                    <ul id="gnb">
                        <li><a href="sub1_1.php">경주소개</a>
                            <ul id="lnb">
                                <li><a href="sub1_1.php">역사</a></li>
                                <li><a href="sub1_2.php">관광안내소</a></li>
                            </ul>
                        </li>
                        <li><a href="sub2_1.php">경주여행</a></li>
                        <li><a href="sub3_1.php">경주축제</a></li>
                        <li><a href="board.php">게시판</a></li>
                    </ul>
                    
                </nav>
            
            </div>
        
        </div>
        
        
    </div>
    
    
    <div id="main">
    
    	<?=$output?>
    
    </div>
    
    
    <div id="footer">
    
    	<div id="container">
        
        	<!--로고-->
        	<div id="ft1">
        
                <div id="logo"><img src="img/logo.png" alt="logo" title="경주 관광 진흥원 로고"></div>
            
            </div>
            
        	<!--홈페이지 정보, 카피라이트-->
            <div id="ft2">
            
                <ul id="info">
                    <li>대표자 : 전석환 | </li>
                    <li>연락처 : 032-1234-5678 | </li>
                    <li>모바일 : 010-1234-5678 | </li>
                    <li>이메일 : abcd@navum.com | </li>
                    <li>주소 : 인천광역시 어디구 어디시 어디로 몇 번길</li>
                </ul>
                
                <ul id="copyright">
                    <li><?=date("y")?> 경주 관광 진흥원 ⓒ all rights reserved</li>
                </ul>
            
            </div>
            
        
        </div>
    
    </div>
    

</body>
</html>