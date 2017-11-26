<?php
    $mysqli = new mysqli("localhost", "hmjy2017", "2017destiny", "hmjy2017");
//connect DB
    if (mysqli_errno($mysqli)){
        exit("mysql connect error");
    }//check connetion DB

    $data = $mysqli->query("SELECT * FROM `cabinet` WHERE `user` IS NOT NULL");
    echo json_encode($data->fetch_object());
?>
