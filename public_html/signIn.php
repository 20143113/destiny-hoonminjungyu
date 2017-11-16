<?php
    include "../include/session.php";
    include "../include/signup.php";

    $student_id = $_POST['student_id'];
    $password = md5($password = $_POST['password']);


    $data = $mysqli->query("SELECT * FROM `users` WHERE `id` = '" . $_POST['student_id'] . "'");
        $row = $data->fetch_array(MYSQLI_ASSOC);


        if ($row != null) {
            $_SESSION['ses_userid'] = $row['student_id'];
            echo $_SESSION['ses_userid'].'님 안녕하세요';
            echo '로그아웃 하기';
        }

        if($row == null){
            echo '로그인 실패 아이디와 비밀번호가 일치하지 않습니다.';
        }
?>
