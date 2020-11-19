<!-- 로그인 페이지입니다 -->

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login...</title>
  </head>
  <body>
    <?php

    // //아이디 비번 입력 안됨
    //   if(!$_POST["loginID"] || !$_POST["loginPW"]){
    //     echo "<script>alert('ID/PW를 입력하세요');</script>";
    //     echo("<script>location.href='index.php';</script>");
    //   }


      //관리자용 아이디 비번
      if($_POST["loginID"] == "1234"){
          if($_POST["loginPW"] == "1234"){
            session_start();
            $_SESSION['idForHyun0421'] = 1234;
            echo("<script>location.href='Admin.php';</script>");
          }
          else{
            echo "<script>alert('잘못된 비밀번호입니다');</script>";
            echo("<script>window.history.back();</script>");
          }
      }


      //유저용 아이디 비번
      else{
        $host = 'localhost';
        $user = 'dhwlsdnjs55';
        $pw = 'naver1379@';
        $dbName = 'dhwlsdnjs55';
        $mysqli = new mysqli($host, $user, $pw, $dbName);
        if(!$mysqli){
          echo "<script>alert('데이터 서버와의 연결을 실패하였습니다');</script>";
          echo("<script>window.history.back();</script>");
        }
        else{
          $sql = "SELECT ID, PW FROM members_table";
          $result = mysqli_query($mysqli, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            if($_POST["loginID"] == $row['ID']){
              if($_POST["loginPW"] == $row['PW']){
                mysqli_close($mysqli);
                $idvalue = $_POST["loginID"];
                session_start();
                $_SESSION['idForHyun0421'] = $idvalue;
                echo("<script>location.href='user.php';</script>");
              }
              else{
                mysqli_close($mysqli);
                echo "<script>alert('잘못된 비밀번호입니다');</script>";
                echo("<script>window.history.back();</script>");
              }
            }
          }

        }
        mysqli_close($mysqli);
        echo "<script>alert('잘못된 아이디입니다');</script>";
        echo("<script>window.history.back();</script>");
      }
     ?>
  </body>
</html>
