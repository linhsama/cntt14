<?php

    session_start();
    require("../models/getModel.php");
    
    $email = $_POST["email"];
    $mat_khau = $_POST["mat_khau"];
    $status = $taikhoan->taikhoan__Check_Login($email, $mat_khau);
    echo json_encode($status);

?>