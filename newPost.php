<?php
session_start();
$idvalue = $_SESSION['idForHyun0421'];
if ($idvalue != 1234){
  echo "<script>alert('잘못된 접근입니다.');</script>";
  echo("<script>location.href='index.php';</script>");
}
?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>
<?php
   $connect = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
   if(!$connect){
     echo "<script>alert('데이터 서버와의 연결을 실패하였습니다');</script>";
     echo("<script>location.href='Admin.html';</script>");
   } // //아이디 중복확인
   $tableName = $_POST['postName'];
   $sql = "CREATE TABLE " . $tableName . " (context text)";
   if (mysqli_query($connect, $sql)) {
        mysqli_close($connect);
        $connectNew = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
        $sqlNew = "SELECT id FROM members_table";
        //members table 에 연결후 row 개수 확인
        $resultNew = mysqli_query($connectNew, $sqlNew);
        //FOr loop 사용, 데이타베이스에 alter해서 추가
        while ($row = mysqli_fetch_assoc($resultNew)) {
             $connectNew2 = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
             $sqlNew2 = "ALTER TABLE " . $tableName . " ADD " . $row['id'] . " int default 0";
             if(!mysqli_query($connectNew2, $sqlNew2)){
               echo "<script>alert('알수없는 에러가 발생하였습니다');</script>";
               echo("<script>location.href='dealingWithPost.php';</script>");
             }
             mysqli_close($connectNew2);
        }
        mysqli_close($connectNew);

        $connect2 = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'dhwlsdnjs55');
        if(!$connect2){
          echo "<script>alert('데이터 서버와의 연결을 실패하였습니다');</script>";
          echo("<script>window.history.back();</script>");
        }
        $context = $_POST['context'];
        $sql2 = "INSERT INTO ".$tableName." (context) VALUES ('$_POST[context]')";
        if(mysqli_query($connect2, $sql2)){
          mysqli_close($connect2);
          echo "<script>alert('게시글을 등록하셨습니다');</script>";
          echo("<script>location.href='dealingWithPost.php';</script>");
        }
        else{
          echo "<script>alert('에러가 발생하였습니다');</script>";
          $connect3 = mysqli_connect('localhost', 'dhwlsdnjs55', 'naver1379@', 'actdhwlsdnjs55');
          $sql3 = "DROP TABLE ". $tableName;
          mysqli_query($connect3, $sql3);
          mysqli_close($connect2);
          mysqli_close($connect3);
          echo("<script>window.history.back();</script>");
        }
    } else {
      mysqli_close($connect);
      echo "<script>alert('에러가 발생하였습니다');</script>";
      echo("<script>window.history.back();</script>");
    }
 ?>
