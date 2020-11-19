<!-- 회원가입 처리용 페이지입니다  -->

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>회원가입 중...</title>
  </head>
  <body>
    <?php

    //입력값이 없을경우, 베이스 확인


      //서버연결
       $host = 'localhost';
       $user = 'dhwlsdnjs55';
       $pw = 'naver1379@';
       $dbName = 'dhwlsdnjs55';
       $mysqli2 = new mysqli($host, $user, $pw, $dbName);
       if(!$mysqli2){
         echo "<script>alert('데이터 서버와의 연결을 실패하였습니다');</script>";
         echo("<script>location.href='loginup.php';</script>");
       } // //아이디 중복확인
        else{
          $sql = "SELECT id FROM members_table ";
          $result = mysqli_query($mysqli2, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            if($_POST["loginID"] == $row['id']){
              mysqli_close($mysqli2);
              echo "<script>alert('이미 존제하는 아이디입니다');</script>";
              echo("<script>location.href='loginup.php';</script>");
            }
          }
        }


        //데이터 베이스와 다시연결
      $host = 'localhost';
      $user = 'dhwlsdnjs55';
      $pw = 'naver1379@';
      $dbName = 'dhwlsdnjs55';
      $mysqli = new mysqli($host, $user, $pw, $dbName);
      if(!$mysqli){
        echo "<script>alert('데이터 서버와의 연결을 실패하였습니다');</script>";
        echo("<script>location.href='loginup.php';</script>");
      }
      else{
        $sql3 = "INSERT INTO members_table(id, pw, nm, age, email)
            VALUES('$_POST[loginID]', '$_POST[loginPW]', '$_POST[name]','$_POST[age]','$_POST[email]')";

        if (mysqli_query($mysqli, $sql3)) {
               mysqli_close($mysqli3);
               echo "<script>alert('회원가입이 완료되었습니다.');</script>";
               echo("<script>location.href='index.php';</script>");
             } else {
               mysqli_error($mysqli3);
               mysqli_close($mysqli3);
               echo "<script>alert('에러가 발생했습니다. 다시 시도해주세요.');</script>";
               echo("<script>location.href='loginup.php';</script>");
             }
      }

      //회원가입
    //   else{
    //     $sql3 = "INSERT INTO members_table(ID, PW, NM, AGE, EMAIL)
    //     VALUES('$_POST[loginID]', '$_POST[loginPW]', '$_POST[name]','$_POST[age]','$_POST[email]')";
    //     if (mysqli_query($mysqli2, $sql3)) {
    //       mysqli_close($mysqli2);
    //       echo "<script>alert('회원가입이 완료되었습니다.');</script>";
    //       echo("<script>location.href='index.php';</script>");
    //     } else {
    //       mysqli_error($mysqli2);
    //       echo "<script>alert('에러가 발생했습니다. 다시 시도해주세요.');</script>";
    //       echo("<script>location.href='loginup.php';</script>");
    //       mysqli_close($mysqli2);
    //     }
    //     mysqli_close($mysqli2);
    //   }
    // }
    ?>
  </body>
</html>
