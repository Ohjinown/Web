<!-- 회원가입용 입력용 입니다 -->

<!DOCTYPE html>
<html lang= "ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      회원가입 </p>
    <form method="POST" action="processing.php">
      <div>
        <label1> Name : <input type="text" name = "name" />
        </label1>
      </div>
      <div>
        <label1> ID : <input type="text" name = "loginID" />
        </label1>
      </div>
      <div>
        <label2> PW : <input type="password" name="loginPW" />
        </label2>
      </div>
      <div>
        <label2> Enter PW again : <input type="password" name="loginPW2" />
        </label2>
      </div>
      <div>
        <label2> Email : <input type="email" name="email"/>
        </label2>
      </div>
      <div>
        age:
        <select name= "age">
          <option value = "10">10대 </option>
          <option value = "20">20대 </option>
          <option value = "30">30대 </option>
          <option value = "40">40대 </option>
          <option value = "50">50대 </option>
          <option value = "60">60대 </option>
        </select>
      </div>
      <input type ="submit", value = "회원가입"/>
    </form>
  </body>
</html>
