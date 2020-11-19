<!DOCTYPE html>
<html lang="en" dir="ltr" data-dark="false" data-useragent="Mozilla/5.0 (Linux; Android5.0; SM-G900p Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko)
Chrome/85.0.4183.83 Mobile Safari/537.36 Edg/85.0.564.44">
<head>
  <meta charset="utf-8">
  <title>회원가입</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edg">
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="index,nofollow">
  <!-- css 파일 분리 -->
  <link href='loginup.css' rel='stylesheet'/>

  <style>
    div {text-align: center;}
  </style>

  <script type="text/javascript">

      // 필수 입력정보인 아이디, 비밀번호가 입력되었는지 확인하는 함수
      function checkValue()
      {
          if(!document.userInfo.loginID.value){
              alert("아이디를 입력하세요.");
              return false;
          }
          if(!document.userInfo.loginPW.value){
              alert("비밀번호를 입력하세요.");
              return false;
          }
          // 비밀번호와 비밀번호 확인에 입력된 값이 동일한지 확인
          if(document.userInfo.loginPW.value != document.userInfo.loginPW2.value ){
              alert("비밀번호를 동일하게 입력하세요.");
              return false;
          }
          if (!document.userInfo.name.value) {
            alert("이름을 입력해주세요");
            return false;
          }
          if (!document.userInfo.email.value) {
            alert("이메일을 입력해주세요");
            return false;
          }
          if (!document.userInfo.age.value) {
              alert("연령대를 선택해주세요.");
              return false;
            }
      }
  </script>

</head>
<body>
  <!-- div 왼쪽, 오른쪽 바깥여백을 auto로 주면 중앙정렬된다.  -->
  <div>
  </div>
  <section class="loginup">
    <div class="im">
      <img class="im1"src="log.png" alt="로그 사진" width="200px", height="100px">
    </div>
    <!--<h1>스튜디오 반(studio rebel)</h1>-->
    <h2>회원가입</h2>
    <div class="logup">
    <form method="post" action="processing.php" name="userInfo" onsubmit="return checkValue()">
      <!-- 입력한 값을 전송하기 위해 form 태그를 사용한다 -->
      <!-- 값(파라미터) 전송은 POST 방식, 전송할 페이지는 JoinPro.jsp -->
          <table class="table">
              <tr>
                  <td id="title">아이디</td>
                  <td>
                      <input type="text" name="loginID" autocomplete="off" maxlength="50">
                  </td>
              </tr>

              <tr>
                  <td id="title">비밀번호</td>
                  <td>
                      <input type="password" name="loginPW" autocomplete="off" maxlength="50">
                  </td>
              </tr>

              <tr>
                  <td id="title">비밀번호 확인</td>
                  <td>
                      <input type="password" name="loginPW2" autocomplete="off" maxlength="50">
                  </td>
              </tr>

              <tr>
                  <td id="title">이름</td>
                  <td>
                      <input type="text" name="name" autocomplete="off" maxlength="50">
                  </td>
              </tr>

              <tr>
                  <td id="title">이메일</td>
                  <td>
                      <input type="text" name="email" autocomplete="off" maxlength="50">
                  </td>
              </tr>

              <tr>
                  <td id="title">연령대</td>
                  <td>
                      <select name="age">
                          <option value="">연령대</option>
                          <option value="10" >10</option>
                          <option value="20" >20</option>
                          <option value="30" >30</option>
                          <option value="40" >40</option>
                          <option value="50" >50</option>
                          <option value="60" >60</option>
                          <option value="70" >70</option>
                          <option value="70" >80</option>
                      </select>
                  </td>
              </tr>

          </table>
          <div class="but">
          <button type="submit" name="button">가입</button>
          <button type="button" name="button" onclick="location.href='index.php'">취소</button>
          <!--<input name="button"type="submit" value="가입" >
          <input type="button" value="취소" onclick="location.href='index.php'">-->
        </div>
          </form>
            </div>
  </section>
    <!-- </div> -->
</body>
</html>
