<meta charset="utf-8">
<?php
  $n = $_POST['postName'];
  $c = $_POST['context'];
  $mysqli = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
  $sql = "UPDATE " . $n. " SET context = ' " .$c. "'";
  if(!mysqli_query($mysqli, $sql)){
    mysqli_close($mysqli);
    echo "<script>alert('오류가 발생했습니다.');</script>";
    echo("<script>window.history.back();</script>");
  }
  else{
    echo "<script>alert('게시글을 수정하였습니다.');</script>";
    echo("<script>location.href='dealingWithPost.php';</script>");
  }
  echo $sql;
 ?>
