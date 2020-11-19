<?php
session_start();
$idvalue = $_SESSION['idForHyun0421'];
if ($idvalue != 1234){
echo "<script>alert('잘못된 접근입니다.');</script>";
echo("<script>location.href='index.php';</script>");
}
?>
<!-- 관리자용 화면입니다 -->
<!DOCTYPE html>
<html lang="ko" dir="ltr" data-dark="false" data-useragent="Mozilla/5.0 (Linux; Android5.0; SM-G900p Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko)
Chrome/85.0.4183.83 Mobile Safari/537.36 Edg/85.0.564.44">
  <head>
    <meta charset="utf-8">
    <title></title>
   <link rel="stylesheet" href="Admin.css">
   <!--<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height,
   initial-scale=1.0"> -->
   <meta property="og:type" content="website">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="robots" content="index,nofollow">

  </head>
  <header id="top">
    <h1>관리자 화면</h1>
    <nav class="top1">
      <span><a href="logout.php" class="a">로그아웃</a></span>
    </nav>
  </header>
  <div class="top2">
    <ul>
      <span><a href="checkingUsers.php">회원정보</a></span>
      <span><a href="dealingWithPost.php">공지사항</a></span>
      <span><a href="#">유튜브 관리</a></span>
    </ul>
  </div>

  <!-- <body>
      <div id="top">
        <div class="top1">
          <h1>관리자 화면</h1>
        </div>
      </div>
      <div class="top2">
        <a class="menuLike" href="logout.php">로그아웃</a>
      </div>
    <nav id="menu">
      <ul>
        <li class="li1">
          <a class="menuLike" href="checkingUsers.php">회원정보 확인</a>
        </li>


        <li class="li2">
          <a class="menuLike" href="dealingWithPost.php">공지확인</a>
        </li>

        <li class="li3">
          <a class="menuLike" href="#">유뷰트 관리</a>
        </li>
          </ul>
    </nav>
    <div class="img">
      <img src="log.png" alt="" width="200px", height="100px">
      <img src="OnP.png" alt="" width="200px", height="100px">
    </div> -->

  </body>
</html>
