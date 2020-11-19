<?php
session_start();
$idvalue = $_SESSION['idForHyun0421'];
if ($idvalue != 1234){
  echo "<script>alert('잘못된 접근입니다.');</script>";
  echo("<script>location.href='index.php';</script>");
}
?>

<!-- 게시글 조작용 화면입니다 -->

<!-- 게시글 조작용 화면입니다 -->

<!DOCTYPE html>
<html lang="ko" dir="ltr"  data-dark="false" data-useragent="Mozilla/5.0 (Linux; Android5.0; SM-G900p Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko)
Chrome/85.0.4183.83 Mobile Safari/537.36 Edg/85.0.564.44">
  <head>
    <meta charset="utf-8">
    <title>게시물 확인</title>
    <meta property="og:type" content="website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width", height="device-height">
    <meta name="robots" content="index,nofollow">
    <link rel="stylesheet" href="dealingWithPost.css">
  </head>
  <body>
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

    <div class="text">
    <h1>게시글</h1>
    </div>

    <div class="button">
      <button type="button" onclick="location.href='newPost.html' ">게시글 등록</button>
    </div>

    <section class="post">
    <?php
      $connect = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
      $sql = "select TABLE_NAME, CREATE_TIME from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'dhwlsdnjs55' order by create_time desc";
      $result = mysqli_query($connect, $sql);
      while($row = mysqli_fetch_assoc($result))
      {
        if($row['TABLE_NAME'] != 'members_table'){
          echo "<div>";
          echo "<form method = 'get', action = 'checkingPostForAdmin.php'>";
          echo $row['TABLE_NAME'] . "               ";
          echo $row['CREATE_TIME'];
          echo "<input type = 'hidden' value = ". $row['TABLE_NAME'] ." name = postName><br>";
          echo "<input type ='submit', value = '게시물 확인'/><br>";
          echo "</form>";
          echo "</div>";
        }
      }
      mysqli_close($connect);
     ?>
     </section>
  </body>
</html>
