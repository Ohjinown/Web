<!DOCTYPE html>
<html lang="en" dir="ltr" data-dark="false" data-useragent="Mozilla/5.0 (Linux; Android5.0; SM-G900p Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko)
Chrome/85.0.4183.83 Mobile Safari/537.36 Edg/85.0.564.44">
  <head>
    <meta charset="utf-8">
    <style>
      img {
        text-align: center;
        margin-bottom: 80px;
      }
    </style>
    <title>스튜디오 반</title>
      <link rel="stylesheet" href="style.css">
      <meta property="og:type" content="website">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=700", height="device-height">
      <meta name="robots" content="index,nofollow">
      <meta name="apple-mobile-web-title" content="스튜디오 반">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <!-- <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height,
      initial-scale=1.0"> -->
<!-- user-scalable확대 축수 initial-scale는 초기확대값 키면 화면 보이는뷰-->
<!-- user-scalable확대 축수 initial-scale는 초기확대값 키면 화면 보이는뷰-->
  </head>
  <body>
    <section class="login-form">
      <img src="3.png" alt="" width="450" , height="40px">
        <!-- <h1>스튜디오 반(studio rebel)</h1> -->
    <form method="POST" action="loginPage.php">
            <div class="int-area" >
                <input type="text" name="loginID" id="loginID" autocomplete="off" required>
                <label for="id">ID</label>
            </div>
            <div class="int-area" >
                <input type="password" name="loginPW" id="loginPW" autocomplete="off" required>
                <label for="pw">PASSWORD</label>
            </div>
            <div class="btn-area">
                <button id="login"type="submit" value="POST">Log in</button>
            </div>
            <div class="btn-area1">
                <button id="signup"type="button" onclick="location.href='loginup.php'">Sign up</button>
                <!--<button id="signup"type="button" onclick="alert('지금은 회원가입이 안됩니다')">Sign up</button>-->

            </div>
        </form>
    </section>
  </body>
</html>
