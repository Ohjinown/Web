<!DOCTYPE html>
<html lang= "ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<!-- php가 데이터를 삭제하는 프로세스 -->
<?php
$host = 'localhost';
$user = 'dhwlsdnjs55';
$pw = 'naver1379@';
$dbName = 'dhwlsdnjs55';
$mysqli = new mysqli($host, $user, $pw, $dbName);
if(!$mysqli){
  echo "<script>alert('데이터 서버와의 연결을 실패하였습니다');</script>";
  echo("<script>location.href='checkingUsers.php';</script>");
}
else{
  $sql = "SELECT ID FROM members_table";
  $result = mysqli_query($mysqli, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    if($_POST["deletedID"] == $row['ID']){
      mysqli_close($mysqli);
      $mysqli2 = new mysqli('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
      $sql2 = "DELETE FROM members_table WHERE ID = '".$_POST['deletedID']."'";
      if (mysqli_query($mysqli2, $sql2)) {
        echo "<script>alert('삭제하였습니다');</script>";
      } else {
          echo "<script>alert('알수없는 애러가 발생하였습니다');</script>".mysqli_error($mysqli2);
      }
      mysqli_close($mysqli2);
      echo("<script>location.href='checkingUsers.php';</script>");
    }
  }
  mysqli_close($mysqli);
  echo "<script>alert('존제하자않는 아이디입니다');</script>";
  echo("<script>location.href='checkingUsers.php';</script>");
}
?>
</html>
