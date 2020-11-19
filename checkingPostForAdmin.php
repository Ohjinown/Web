  <?php
session_start();
$idvalue = $_SESSION['idForHyun0421'];
if ($idvalue != 1234){
  echo "<script>alert('잘못된 접근입니다.');</script>";
  echo("<script>location.href='index.php';</script>");
}
?>

<!-- 게시글 조작용 화면입니다 -->

<!DOCTYPE html>
<html lang="ko" dir="ltr" data-dark="false" data-useragent="Mozilla/5.0 (Linux; Android5.0; SM-G900p Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko)
Chrome/85.0.4183.83 Mobile Safari/537.36 Edg/85.0.564.44">
  <head>
    <meta charset="utf-8">
    <title>게시물</title>
    <link rel="stylesheet" href="checkingPostForAdmin.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta property="og:type" content="website">
      <meta name="viewport" content="width=500">
      <meta name="robots" content="index,nofollow">
  </head>
  <body>
    <li><a class="menuLike" href="logout.php">로그아웃</a></li>
    <h1>Studio반 관리자 화면</h1>
    <li><a class="menuLike" href="checkingUsers.php">회원정보 확인</a></li>
    <li><a class="menuLike" href="dealingWithPost.php">공지확인</a></li>
    <li><a class="menuLike" href="#">유뷰트 관리</a></li>
    <section class="text">
      <textarea name="context" rows="8" cols="40" readonly><?php
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
      ?></textarea>
     </section>
     <div>
       <?php
        $mysqliNew = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
        $hiN = $_GET['postName'];
        $sqlN = "SHOW COLUMNS FROM " . $hiN;
        if(!$resultN = mysqli_query($mysqliNew, $sqlN)){
          mysqli_close($mysqliNew);
          echo "<script>alert('오류가 발생했습니다.');</script>";
          echo("<script>location.href='Admin.php';</script>");
        }
        else{
          echo  "참석자 <br>";
          while($rowN = mysqli_fetch_assoc($resultN)){
            if($rowN['Field'] != 'context'){
              $mysqliNew2 = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
              $hiN2 = $_GET['postName'];
              $sqlN2 = "SELECT " . $rowN['Field'] . " FROM " . $hiN;
              $resultN2 = mysqli_query($mysqliNew2, $sqlN2);
              $rowN2 = mysqli_fetch_assoc($resultN2);
              $idV = $rowN['Field'];
              if($rowN2[$idV] > 0){
                $mysqliNew3 = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
                $sqlN3 = "SELECT nm FROM members_table WHERE id = '" . $idV . "'";
                $resultN3 = mysqli_query($mysqliNew3, $sqlN3);
                $rowN3 = mysqli_fetch_assoc($resultN3);
                if($rowN3['nm']){
                  echo $rowN3['nm'] . " ";
                  echo  $rowN['Field']."      <br>";
                }
              }
            }
          }
       }
       echo "<br>";
       echo "<br>";
       echo "<br>";

       $mysqliNew = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
       $hiN = $_GET['postName'];
       $sqlN = "SHOW COLUMNS FROM " . $hiN;
       if(!$resultN = mysqli_query($mysqliNew, $sqlN)){
         mysqli_close($mysqliNew);
         echo "<script>alert('오류가 발생했습니다.');</script>";
         echo("<script>location.href='Admin.php';</script>");
       }
       else{
         echo  "불참자 <br>";
         while($rowN = mysqli_fetch_assoc($resultN)){
           if($rowN['Field'] != 'context'){
             $mysqliNew2 = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
             $hiN2 = $_GET['postName'];
             $sqlN2 = "SELECT " . $rowN['Field'] . " FROM " . $hiN;
             $resultN2 = mysqli_query($mysqliNew2, $sqlN2);
             $rowN2 = mysqli_fetch_assoc($resultN2);
             $idV = $rowN['Field'];
             if($rowN2[$idV] < 0){
               $mysqliNew3 = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
               $sqlN3 = "SELECT nm FROM members_table WHERE id = '" . $idV . "'";
               $resultN3 = mysqli_query($mysqliNew3, $sqlN3);
               $rowN3 = mysqli_fetch_assoc($resultN3);
               if($rowN3['nm']){
                 echo $rowN3['nm'] . " ";
                 echo  $rowN['Field']."      <br>";
               }
             }
           }
         }
      }


      echo "<br>";
      echo "<br>";
      echo "<br>";
      $mysqliNew = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
      $hiN = $_GET['postName'];
      $sqlN = "SHOW COLUMNS FROM " . $hiN;
      if(!$resultN = mysqli_query($mysqliNew, $sqlN)){
        mysqli_close($mysqliNew);
        echo "<script>alert('오류가 발생했습니다.');</script>";
        echo("<script>location.href='Admin.php';</script>");
      }
      else{
        echo  "미응답자 <br>";
        while($rowN = mysqli_fetch_assoc($resultN)){
          if($rowN['Field'] != 'context'){
            $mysqliNew2 = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
            $hiN2 = $_GET['postName'];
            $sqlN2 = "SELECT " . $rowN['Field'] . " FROM " . $hiN;
            $resultN2 = mysqli_query($mysqliNew2, $sqlN2);
            $rowN2 = mysqli_fetch_assoc($resultN2);
            $idV = $rowN['Field'];
            if($rowN2[$idV] == 0){
              $mysqliNew3 = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
              $sqlN3 = "SELECT nm FROM members_table WHERE id = '" . $idV . "'";
              $resultN3 = mysqli_query($mysqliNew3, $sqlN3);
              $rowN3 = mysqli_fetch_assoc($resultN3);
              if($rowN3['nm']){
                echo $rowN3['nm'] . " ";
                echo  $rowN['Field']."      <br>";
              }
            }
          }
        }
     }
        ?>
     </div>
     <div class="text1">
     <form method = 'get', action = 'deletingPost.php'>
       <?php
          echo "<input type = hidden  value = ". $hi ." name = postName>";
        ?>
        <button type="submit" name="button">게시물 삭제</button>
      <!-- <input type ='submit', value = '게시물 삭제'/>-->
     </form>
     <form method = 'get', action = 'edittingPost.php'>
       <?php
          echo "<input type = hidden  value = ". $hi ." name = postName>";
        ?>
        <button type="submit" name="button">게시물 수정</button>
      <!-- <input type ='submit', value = '게시물 수정'/>-->
     </form>
       </div>
  </body>
</html>
