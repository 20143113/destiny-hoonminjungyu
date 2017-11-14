<?php
    $mysqli = new mysqli("localhost", "hmjy2017", "2017destiny", "hmjy2017");
//connet DB
    if (mysqli_errno($mysqli)){
        exit("mysql connect error");
    }//check connetion DB

    if ($_POST['student_id'] && $_POST['name'] && $_POST['password']){
        // error_log ("call\n", 3, "/home/hmjy2017/log/debug.log");
        $data = $mysqli->query("SELECT * FROM `users` WHERE `id` = '" . $_POST['student_id'] . "'");
        if ($data->fetch_array()){
            $msg["state"] = "fail";
            $msg["error"] = "2";

            echo json_encode($msg);
        }
        else{
            $mysqli->query("INSERT INTO `users` (`no`, `id`, `pw`, `name`, `grade`, `is_adm`)
            VALUES (NULL, '" . $_POST['student_id'] . "', '" . md5($_POST['password']) . "', '" . $_POST['name'] . "', '" . $_POST['grade'] . "', '0');");

            $msg["state"] = "success";
            echo json_encode($msg);
        }
    }else{
        $msg["state"] = "fail";
        $msg["error"] = "1";
        echo json_encode($msg);
    }



?>
