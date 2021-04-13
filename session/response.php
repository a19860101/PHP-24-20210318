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

    header("refresh:2;url=index.php");