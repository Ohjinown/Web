<html lang="ko" dir="ltr">
<meta charset="utf-8">
<?php
    $mysqli = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
    $hi = $_GET['postName'];
    $sql = "DROP TABLE " . $hi;
    if(!mysqli_query($mysqli, $sql)){
      mysqli_close($mysqli);
      echo "<script>alert('오류가 발생했습니다.');</script>";
      echo("<script>location.href='dealingWithPost.php';</script>");
    }
    else{
      mysqli_close($mysqli);
      echo "<script>alert('삭제하였습니다.');</script>";
      echo("<script>location.href='dealingWithPost.php';</script>");
    }
 ?>
