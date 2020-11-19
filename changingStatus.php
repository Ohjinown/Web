<meta charset="utf-8">
<?php
//session에 접속 제대로된 접근인지 추적
session_start();
$idvalue = $_SESSION['idForHyun0421'];
if (!$idvalue){
  echo "<script>alert('잘못된 접근입니다.');</script>";
  echo("<script>location.href='index.php';</script>");
}
?>



<?php
//datatable 접속
 $mysqli = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
 $hi = $_GET['postName'];

 //database 접속 게시글 명의 idvalue의 값을 입력값으로 변경
 $sql = "UPDATE " . $_GET['postName'] . " SET " . $idvalue . " = " . $_GET['val'];
 if(!$result = mysqli_query($mysqli, $sql)){
   mysqli_close($mysqli);
   echo "<script>alert('오류가 발생했습니다.');</script>";
   echo("<script>window.history.back();</script>");
 }
 else{
   echo "<script>alert('성공적으로 답변하였습니다.');</script>";
   echo("<script>window.history.back();</script>");
 }
 ?>
