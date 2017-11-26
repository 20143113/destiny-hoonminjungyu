<?php
    $mysqli = new mysqli("localhost", "hmjy2017", "2017destiny", "hmjy2017");

    if (mysqli_errno($mysqli)){
        exit("mysql connect error");
    }//check connetion DB

    $memberId = $mysqli -> real_escape_string($_POST['student_id']);
    $memberPw = $mysqli -> real_escape_string(md5($memberPw = $_POST['password']));

    $data = $mysqli->query("SELECT * FROM users WHERE id = '{$memberId}' AND pw = '{$memberPw}'");
    if($data->fetch_array()){
      echo $memberId.'님 안녕하세요';
      echo "<a href=main1.html>사물함 신청</a>";
    }
    else {
       echo '로그인 실패. 아이디와 비밀번호가 일치하지 않습니다.';
       echo "<a href=index.html>뒤로가기</a>";
    }
    
?>
