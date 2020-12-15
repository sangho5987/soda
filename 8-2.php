<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <?php
    $id_2 = $_GET["id_2"];
    $pw = $_GET["pw"];
    $id = $_GET["id"];
    $password = $_GET["password"];
    if($password == "$pw" && $id == "$id2"){
        echo "$id_s2 님 환영합니다";
    } else {
        echo "비밀번호를 또는 아이디를 확인해주세요";
    }
   ?>
</body>
</html>
