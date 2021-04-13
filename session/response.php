<?php
    session_start();
    extract($_POST);

    print_r($_POST);

    // echo $data;
    // $_SESSION["USER"] = $user;
    // $_SESSION["MAIL"] = $mail;
    // $_SESSION["PW"] = $pw;

    $_SESSION["AUTH"] = $_POST;

    // echo $_SESSION["USER"],$_SESSION["MAIL"],$_SESSION["PW"];
    echo "<script>alert('您已登入');</script>";
    header("refresh:0;url=index.php");