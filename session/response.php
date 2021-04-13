<?php
    session_start();
    extract($_POST);

    // echo $data;
    $_SESSION["DATA"] = $data;

    echo $_SESSION["DATA"];

    header("refresh:2;url=index.php");