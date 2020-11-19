<?php
session_start();
$idvalue = $_SESSION['idForHyun0421'];
if ($idvalue != 1234){
  echo "<script>alert('잘못된 접근입니다.');</script>";
  echo("<script>location.href='index.php';</script>");
}
?>
<!-- 관리자가 채킹하는 화면입니다 -->
<!DOCTYPE html>
<html lang="ko" dir="ltr" data-dark="false" data-useragent="Mozilla/5.0 (Linux; Android5.0; SM-G900p Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko)
Chrome/85.0.4183.83 Mobile Safari/537.36 Edg/85.0.564.44">
  <head>
    <meta charset="utf-8">
    <title>회원정보</title>
    <link rel="stylesheet" href="checkingUsers.css">
    <meta property="og:type" content="website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=700", height="device-height">
    <meta name="robots" content="index,nofollow">
    <!--회원정보 글자 UI-->
    <!-- <style>
      .text h1{
        text-align: center;
        margin-top: -150px;
      }
    </style> -->
  </head>
  <body>
    <header id="top">
      <h1>관리자 화면</h1>
      <nav class="top1">
        <span><a href="logout.php">로그아웃</a></span>
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
    <h1>회원정보</h1>
  </div>
  <section id="db">
    <?php
      //데이터 베이스와 연동
      $connect = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
      //서버와의 연결 실패
      //유저정보 출력 화면
      $sql = "SELECT id,pw,nm,age,email FROM members_table";
      $result = mysqli_query($connect, $sql);
      //유저 정보 확인
      if(!$result)
        echo "존제하는 회원이 없습니다";
      while ($row = mysqli_fetch_assoc($result)) {
           echo $row['nm']. "  ". $row['id']. "  ".  $row['email']. " ". $row['age']. "대";
           echo "<form method = 'post', action = 'delete.php'>";
           echo "<input type = 'hidden' value = ". $row['id'] ." name = deletedID>";
           echo "<input type ='submit', value = '회원삭제'/>";
           echo "</form>";
      }
      mysqli_close($connect);
    ?>
  </section>
    <!-- 회원 삭제용 버튼-->
  </body>
</html>
