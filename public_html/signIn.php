<?php
    $mysqli = new mysqli("localhost", "hmjy2017", "2017destiny", "hmjy2017");

    if (mysqli_errno($mysqli)){
        exit("mysql connect error");
    }//check connetion DB
    $memberId = $_POST['student_id'];
    $memberPw = md5($memberPw = $_POST['password']);
    $data = $mysqli->query("SELECT * FROM 'users' WHERE 'id' = '{$memberId}' AND password = '{$memberPw}'");
    $row = $data->fetch_array(MYSQLI_ASSOC);
    echo '로그아웃 하기';

    if ($row != null) {
        echo $row['id'].'님 안녕하세요';
        echo '로그아웃 하기';
    }

    if($row == null){
      echo '로그인 실패 아이디와 비밀번호가 일치하지 않습니다.';
    }
?>
