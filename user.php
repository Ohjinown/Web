<!-- 유저용 화면입니다 -->

<?php

session_start();
$idvalue = $_SESSION['idForHyun0421'];
if (!$idvalue){
  echo "<script>alert('잘못된 접근입니다.');</script>";
  echo("<script>location.href='index.php';</script>");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-dark="false" data-useragent="Mozilla/5.0 (Linux; Android5.0; SM-G900p Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko)
Chrome/85.0.4183.83 Mobile Safari/537.36 Edg/85.0.564.44">
  <head>
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=460", height="device-height">
    <meta name="robots" content="index,nofollow">
    <title>사용자</title>
    <link rel="stylesheet" href="user.css">
  </head>
  <body>
    <div class="user" width="100px">
      <button type="button" onclick="location.href = 'logout.php'">
        로그아웃
      </button>
      <h1>Studio rebel</h1>
    </div>
    <!--게시물 안에 집어넣는거-->
    <div class="user1">

    </div>
<!---------------------------------------------------------------->
    <div class="text">
      <table class="table" border="1" solid="red" width="450">
        <tr>
          <td>
      <?php
        $connect = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
        $sql =  "select TABLE_NAME, CREATE_TIME from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA = 'dhwlsdnjs55' order by create_time desc";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
          if($row['TABLE_NAME'] != 'members_table'){
            echo "<div>";
            echo "<form method = 'get', action = 'checkingPostForUser.php'>";
            echo $row['TABLE_NAME']. " ";
            echo $row['CREATE_TIME'];
            echo "<input type = 'hidden' value = ". $row['TABLE_NAME'] ." name = postName> &nbsp&nbsp";
            echo "<input type ='submit', value = '게시물 확인'/>";
            echo "</form>";
            echo "</div>";
          }
        }
        mysqli_close($connect);
       ?>
     </td>
   </tr>
</table>
  </div>

  <div class="secession">
    <button type="button" onclick="location.href = 'wantToDelete.html' ">
      회원 탈퇴
    </button>

</div>
  </body>
</html>
