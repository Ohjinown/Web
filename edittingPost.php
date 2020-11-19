<?php
session_start();
$idvalue = $_SESSION['idForHyun0421'];
if ($idvalue != 1234){
echo "<script>alert('잘못된 접근입니다.');</script>";
echo("<script>location.href='index.php';</script>");
}
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr" data-dark="false" data-useragent="Mozilla/5.0 (Linux; Android5.0; SM-G900p Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko)
Chrome/85.0.4183.83 Mobile Safari/537.36 Edg/85.0.564.44">
  <head>
    <meta charset="utf-8">
    <title>게시글 수정</title>
    <meta property="og:type" content="website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width", height="device-height">
    <meta name="robots" content="index,nofollow">
    <link rel="stylesheet" href="edittingPost.css">
  </head>
  <body>
    <section class="title">
      <?php
        echo $hi = $_GET['postName'];
       ?>
    </section>
     <div class="text">
    <h2>내용</h2>
    </div>
      <div class="text1">
        <form method = 'post' action = "edittingPorcess.php">
        <textarea name="context" rows="8" cols="40" required><?php
        $mysqli = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
        $hi = $_GET['postName'];
        $sql = "SELECT context FROM " . $hi;
        if(!$result = mysqli_query($mysqli, $sql)){
          mysqli_close($mysqli);
          echo "<script>alert('오류가 발생했습니다.');</script>";
          echo("<script>location.href='Admin.html';</script>");
        }
        else{
          $row = mysqli_fetch_assoc($result);
          echo $row['context'];
        }
        ?></textarea>
      </div>
      <?php echo "<input type = hidden  value = ". $hi ." name = postName>"; ?>
      <section class="button">
      <button type="submit" name="button">게시물 수정</button>
      <button type="button" name="button" onclick="history.back(-1);">취소</button>
    <!--  <input type ='submit', value = '게시물 수정'/>
    <input type="button" value="취소" onclick="history.back(-1);"> -->
      </section>
  </body>
</html>
