
<!-- 관리자가 채킹하는 화면입니다 -->
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<?php
//유저의 삭제를 실제적으로 돌리는 페이지입니다

//session에 접속, 삭제할려는 유저의 아이디 가져오지
session_start();
$idvalue = $_SESSION['idForHyun0421'];

//data base에 접속
$mysqli2 = new mysqli('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');

//members table 접속후 아이디를 database 에서 제거
$sql2 = "DELETE FROM members_table WHERE ID = '$idvalue'";
if (mysqli_query($mysqli2, $sql2)) {
  echo "<script>alert('삭제하였습니다');</script>";
} else {
    echo "<script>alert('알수없는 애러가 발생하였습니다');</script>".mysqli_error($mysqli2);
    mysqli_close($mysqli2);
    echo("<script>location.href='user.php';</script>");
}
mysqli_close($mysqli2);

//로그아웃한것이므로 session값을 null로 변경
$_SESSION['idForHyun0421'] = "";

//다시 index 로 돌아가
echo("<script>location.href= 'index.php';</script>");
?>
</html>
