<!-- 게시글 조작용 화면입니다 -->
<?php
session_start();
$idvalue = $_SESSION['idForHyun0421'];
if (!$idvalue){
  echo "<script>alert('잘못된 접근입니다.');</script>";
  echo("<script>location.href='index.php';</script>");
}
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr" data-dark="false" data-useragent="Mozilla/5.0 (Linux; Android5.0; SM-G900p Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko)
Chrome/85.0.4183.83 Mobile Safari/537.36 Edg/85.0.564.44">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="checkingPostForUser.css">
    <meta property="og:type" content="website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=700", height="device-height">
    <meta name="robots" content="index,nofollow">
    <title>게시글 참여 여부</title>
    <style>
      div{
      text-align: center;
      }
      section {
        text-align: center;
        margin-top: 20px;
      }
      textarea{
        /* background-color: #808080; */
        width: 500px;
        height: 200px;
        font-weight: 900;
      }
    </style>
  </head>
  <body>
    <div class="img">
      <img src="log.png" alt="" width="200px", height="100px">
    </div>
    <section class="cen">
    <textarea name="context" rows="8" cols="40" readonly>
      <?php
    $mysqli = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
    $hi = $_GET['postName'];
    $sql = "SELECT context FROM " . $hi;
    if(!$result = mysqli_query($mysqli, $sql)){
      mysqli_close($mysqli);
      echo "<script>alert('오류가 발생했습니다.');</script>";
      echo("<script>location.href='Admin.php';</script>");
    }
    else{
      $row = mysqli_fetch_assoc($result);
      echo $row['context'];
    }
    ?>
  </textarea>
  </section>
    <div class="but">
      <form method = 'get', action = 'changingStatus.php'>
      <input type = 'hidden' value = '<?php echo $hi ?>' name = postName>
      <input type = 'hidden' value = 1 name = val>
      <button type="submit" name="button">참석</button>
        <!-- <input type ='submit', value = '참석'/> -->
      </form>
    </div>
    <div class="but1">
      <form method = 'get', action = 'changingStatus.php'>
      <input type = 'hidden' value = '<?php echo $hi ?>' name = postName>
      <input type = 'hidden' value = -1 name = val>
      <button type="submit" name="button">불참</button>
      <!-- <input type ='submit', value = '불참'/> -->
    </form>
    </div>
  </body>
</html>
